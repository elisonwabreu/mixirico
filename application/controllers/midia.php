<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Midia extends CI_Controller {
		
	public function __construct(){
            parent::__construct();
            init_painel();
            esta_logado();
            $this->load->model('midia_model', 'midia');
	}

	public function index(){
            $this->gerenciar();
	}
	
	public function cadastrar(){
            $this->form_validation->set_rules('tipo', 'TIPO', 'trim|required');
            $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $upload = $this->midia->do_upload('arquivo');
                if (is_array($upload) && $upload['file_name'] != ''):
                    $dados = elements(array('tipo','nome', 'descricao'), $this->input->post());
                    $dados['arquivo'] = $upload['file_name'];
                    $this->midia->do_insert($dados);
                else:
                    set_msg('msgerro', $upload, 'erro');
                    redirect(current_url());
                endif;
            endif;
            init_tema_forms_simples();           
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar'));
            load_template();
	}
        
        public function cadastrar_galeria(){
            init_tema_forms_full();    
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar-galeria'));
            load_template();
	}
        
        public function cadastrar_video(){
            $this->form_validation->set_rules('embed', 'URL DO VIDEO', 'trim|required|ucfirst');
            if ($this->form_validation->run()==TRUE):
                //$dados = elements(array('titulo', 'descricao', 'thumb', 'embed', 'server'), $this->input->post());
                $dados = elements(array('embed'), $this->input->post());
                if(substr_count($dados['embed'], 'youtube') == 1){
			$dados['embed']     = substr($dados['embed'], 32, 11);
			$dados['thumb']     = 'http://i1.ytimg.com/vi/'.$dados['embed'].'/default.jpg';
			$conteudo           = get_meta_tags('https://www.youtube.com/watch?v='.$dados['embed']);
			$dados['titulo']    = $conteudo['title'];
			$dados['descricao'] = $conteudo['description'];
			$dados['server']    = 'YouTube';
		}elseif(substr_count($dados['embed'], 'vimeo') == 1){
			$idVid              = substr($dados['embed'], 17);
			$url_img            = parse_url($dados['embed']);
			$conteudo           = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".substr($url_img['path'], 1).".php"));
			$dados['thumb']     = $conteudo[0]['thumbnail_small'];
			$dados['titulo']    = $conteudo[0]['title'];
			$dados['descricao'] = $conteudo[0]['description'];
			$dados['server']    = 'Vimeo';
		}
                $this->midia->do_video_insert($dados);
            endif;
            init_tema_forms_simples();                
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar-video'));
            load_template();
	}

	public function gerenciar(){
            init_tables();
            set_tema('titulo', 'Listagem de mídias');
            set_tema('conteudo', load_modulo('midia', 'gerenciar'));
            load_template();
	}
        public function gerenciar_video(){
            init_tables();
            set_tema('titulo', 'Listagem de mídias');
            set_tema('conteudo', load_modulo('midia', 'gerenciar-videos'));
            load_template();
	}

	public function editar(){
            $this->form_validation->set_rules('tipo', 'TIPO', 'trim|required');
            $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $dados = elements(array('tipo','nome', 'descricao'), $this->input->post());
                $this->midia->do_update($dados, array('id'=>$this->input->post('idmidia')));
            endif;
            init_tema_forms_simples();
            set_tema('titulo', 'Alteração de mídia');
            set_tema('conteudo', load_modulo('midia', 'editar'));
            load_template();
	}
        
        public function editar_video(){
            $this->form_validation->set_rules('titulo', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $dados = elements(array('titulo', 'descricao'), $this->input->post());
                $this->midia->do_video_update($dados, array('id'=>$this->input->post('idmidia')));
            endif;
            init_tema_forms_simples();
            set_tema('titulo', 'Alteração de mídia');
            set_tema('conteudo', load_modulo('midia', 'editar-video'));
            load_template();
	}

	public function excluir(){
            if (is_admin(TRUE)):
                $idmidia = $this->uri->segment(3);
                if ($idmidia != NULL):
                    $query = $this->midia->get_byid($idmidia);
                    if ($query->num_rows()==1):
                            $query = $query->row();
                            unlink('./assets/uploads/'.$query->arquivo);
                            $thumbs = glob('./assets/uploads/thumbs/*_'.$query->arquivo);
                            foreach ($thumbs as $arquivo):
                                    unlink($arquivo);
                            endforeach;
                            $this->midia->do_delete(array('id'=>$query->id), FALSE);
                    endif;
                else:
                    set_msg('msgerro', 'Escolha uma mídia para excluir', 'erro');
                endif;
            endif;
            redirect('midia/gerenciar');
	}
        
        public function excluir_video(){
            if (is_admin(TRUE)):
                $idmidia = $this->uri->segment(3);
                if ($idmidia != NULL):
                    $query = $this->midia->get_video_byid($idmidia);
                    if ($query->num_rows()==1):
                        $query = $query->row();
                        $this->midia->do_video_delete(array('id'=>$query->id), FALSE);
                    endif;
                else:
                    set_msg('msgerro', 'Escolha uma mídia para excluir', 'erro');
                endif;
            endif;
            redirect('midia/gerenciar_video');
	}
	
	public function get_imgs(){
            header('Content-Type: application/x-json; charset=utf-8');
            $this->db->like('nome', $this->input->post('pesquisarimg'));
            if ($this->input->post('pesquisarimg')=='') $this->db->limit(10);
            $this->db->order_by('id', 'DESC');
            $query = $this->midia->get_all();
            $retorno = 'Nenhum resultado econtrado com base em sua pesquisa';
            if ($query->num_rows()>0):
                    $retorno = '';
                    $query = $query->result();
                    foreach ($query as $linha):
                            $retorno .= '<a href="javascript:;" onclick="$(\'.htmleditor\').tinymce().execCommand(\'mceInsertContent\',false,\'<img src='.base_url("assets/uploads/$linha->arquivo").' />\');return false;">';
                            $retorno .= ''.thumb($linha->arquivo,300,180,FALSE).'</a>';
                    endforeach;
            endif;
            echo (json_encode($retorno));
	}
	
}

/* End of file midia.php */
/* Location: ./application/controllers/midia.php */