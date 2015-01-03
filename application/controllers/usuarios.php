<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_painel();
    }

    public function index() {
        $this->gerenciar();
    }

    public function login() {
        $this->form_validation->set_rules('usuario', 'USUÁRIO', 'trim|required|min_length[4]|strtolower');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[4]|strtolower');
        if ($this->form_validation->run() == TRUE):
            $usuario = $this->input->post('usuario', TRUE);
            $senha = md5($this->input->post('senha', TRUE));
            $redirect = $this->input->post('redirect', TRUE);
            if ($this->usuarios->do_login($usuario, $senha) == TRUE):
                $query = $this->usuarios->get_bylogin($usuario)->row();
                $dados = array(
                    'user_id' => $query->id,
                    'user_nome' => $query->nome,
                    'user_admin' => $query->adm,
                    'user_logado' => TRUE,
                );
                $this->session->set_userdata($dados);
                auditoria('Login no sistema', 'Usuário "' . $usuario . '" fez login no sistema');
                if ($redirect != ''):
                    redirect($redirect);
                else:
                    redirect('scwpanel');
                endif;
            else:
                $query = $this->usuarios->get_bylogin($usuario)->row();
                if (empty($query)):
                    auditoria('Erro de login', 'Usuário inexistente "' . $usuario . '"');
                    set_msg('errologin', 'Usuário inexistente', 'erro');
                elseif ($query->senha != $senha):
                    auditoria('Erro de login', 'Senha incorreta para o usuário "' . $usuario . '"');
                    set_msg('errologin', 'Senha incorreta', 'erro');
                elseif ($query->ativo == 0):
                    auditoria('Erro de login', 'Usuário inativo "' . $usuario . '"');
                    set_msg('errologin', 'Este usuário está inativo', 'erro');
                else:
                    auditoria('Erro de login', 'Erro desconhecido para o usuário "' . $usuario . '"');
                    set_msg('errologin', 'Erro desconhecido, contate o desenvolvedor', 'erro');
                endif;
                redirect('usuarios/login');
            endif;
        endif;
        set_tema('titulo', 'Login');
        set_tema('conteudo', load_modulo('usuarios', 'login'));
        set_tema('rodape', '');
        load_template();
    }

    public function logoff() {
        auditoria('Logoff no sistema', 'O usuário "' . $this->usuarios->get_byid($this->session->userdata('user_id'))->row()->login . '" fez logoff do sistema', FALSE);
        $this->session->unset_userdata(array('user_id' => '', 'user_nome' => '', 'user_admin' => '', 'user_logado' => ''));
        $this->session->sess_destroy();
        set_msg('logoffok', 'Logoff efetuado com sucesso', 'sucesso');
        redirect('usuarios/login');
    }

    public function nova_senha() {
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email|strtolower');
        if ($this->form_validation->run() == TRUE):
            $email = $this->input->post('email');
            $query = $this->usuarios->get_byemail($email);
            if ($query->num_rows() == 1):
                $novasenha = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm0123456789'), 0, 6);
                $mensagem = "<p>Você solicitou uma nova senha para acesso ao painel de administração do site, a partir de agora use a seguinte senha para acesso: <strong>$novasenha</strong></p><p>Troque esta senha para uma senha segura e de sua preferência o quanto antes.</p>";
                if ($this->sistema->enviar_email($email, 'Nova senha de acesso', $mensagem)):
                    $dados['senha'] = md5($novasenha);
                    $this->usuarios->do_update($dados, array('email' => $email), FALSE);
                    auditoria('Redefinição de senha', 'O usuário solicitou uma nova senha por email');
                    set_msg('msgok', 'Uma nova senha foi enviada para seu email', 'sucesso');
                    redirect('usuarios/nova_senha');
                else:
                    set_msg('msgerro', 'Erro ao enviar nova senha, contate o administrador', 'erro');
                    redirect('usuarios/nova_senha');
                endif;
            else:
                set_msg('msgerro', 'Este email não possui cadastro no sistema', 'erro');
                redirect('usuarios/nova_senha');
            endif;
        endif;
        set_tema('titulo', 'Recuperar senha');
        set_tema('conteudo', load_modulo('usuarios', 'nova_senha'));
        set_tema('rodape', '');
        load_template();
    }

    public function cadastrar() {
        esta_logado();
        $this->form_validation->set_message('is_unique', 'Este %s já está cadastrado no sistema');
        $this->form_validation->set_message('matches', 'O campo %s está diferente do campo %s');
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucwords');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email|is_unique[usuarios.email]|strtolower');
        $this->form_validation->set_rules('login', 'LOGIN', 'trim|required|min_length[4]|is_unique[usuarios.login]|strtolower');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[4]|strtolower');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[4]|strtolower|matches[senha]');
        if ($this->form_validation->run() == TRUE):
            $dados = elements(array('nome', 'email', 'login'), $this->input->post());
            $dados['senha'] = md5($this->input->post('senha'));
            if (is_admin())
                $dados['adm'] = ($this->input->post('adm') == 1) ? 1 : 0;
            $this->usuarios->do_insert($dados);
        endif;
        set_tema('titulo', 'Cadastro de usuários');
        set_tema('conteudo', load_modulo('usuarios', 'cadastrar'));
        load_template();
    }

    public function gerenciar() {
        esta_logado();
        set_tema('footerinc', load_js(array('icheck.min'),'assets/admin/atlant/js/plugins/icheck'), FALSE);
        set_tema('footerinc', load_js(array('jquery.mCustomScrollbar.min'),'assets/admin/atlant/js/plugins/mcustomscrollbar'), FALSE);
        set_tema('footerinc', load_js(array('jquery.dataTables.min'),'assets/admin/atlant/js/plugins/datatables'), FALSE);
        set_tema('footerinc', load_js(array('settings'),'assets/admin/atlant/js'), FALSE);
        set_tema('titulo', 'Listagem de usuários');
        set_tema('conteudo', load_modulo('usuarios', 'gerenciar'));
        load_template();
    }

    public function alterar_senha() {
        esta_logado();
        $this->form_validation->set_message('matches', 'O campo %s está diferente do campo %s');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[4]|strtolower');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[4]|strtolower|matches[senha]');
        if ($this->form_validation->run() == TRUE):
            $dados['senha'] = md5($this->input->post('senha'));
            $this->usuarios->do_update($dados, array('id' => $this->input->post('idusuario')));
        endif;
        set_tema('titulo', 'Alteração de senha');
        set_tema('conteudo', load_modulo('usuarios', 'alterar_senha'));
        load_template();
    }

    public function editar() {
        esta_logado();
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucwords');
        if ($this->form_validation->run() == TRUE):
            $dados['nome'] = $this->input->post('nome');
            $dados['ativo'] = ($this->input->post('ativo') == 1 ? 1 : 0);
            if (is_admin(FALSE))
                $dados['adm'] = ($this->input->post('adm') == 1) ? 1 : 0;
            $this->usuarios->do_update($dados, array('id' => $this->input->post('idusuario')));
        endif;
        set_tema('titulo', 'Alteração de usuários');
        set_tema('conteudo', load_modulo('usuarios', 'editar'));
        load_template();
    }

    public function excluir() {
        esta_logado();
        if (is_admin(TRUE)):
            $iduser = $this->uri->segment(3);
            if ($iduser != NULL):
                $query = $this->usuarios->get_byid($iduser);
                if ($query->num_rows() == 1):
                    $query = $query->row();
                    if ($query->id != 1):
                        $this->usuarios->do_delete(array('id' => $query->id), FALSE);
                    else:
                        set_msg('msgerro', 'Este usuário não pode ser excluído', 'erro');
                    endif;
                else:
                    set_msg('msgerro', 'Usuário não encontrado para exclusão', 'erro');
                endif;
            else:
                set_msg('msgerro', 'Escolha um usuário para excluir', 'erro');
            endif;
        endif;
        redirect('usuarios/gerenciar');
    }

}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */
