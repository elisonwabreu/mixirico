<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_painel();
        esta_logado();
        $this->load->model('settings_model', 'settings');
    }

    public function index() {
        $this->gerenciar();
    }

    public function gerenciar() {
        if ($this->input->post('salvardados')):
            if (is_admin(TRUE)):
                $settings = elements(array('nome_site', 'url_logomarca', 'email_adm', 'rua', 'bairro', 'cid_uf', 'emailcom', 'facebook', 'descricao_site', 'descricao_curta', 'keywords_site', 'txt_home'), $this->input->post());
                $settings['twitter'] = $this->input->post('twitter');
                $settings['skype'] = $this->input->post('skype');
                $settings['instagram'] = $this->input->post('instagram');
                $settings['youtube'] = $this->input->post('youtube');
                $settings['cep'] = formata_CEP($this->input->post('cep'));
                $settings['telcom'] = formata_TEL($this->input->post('telcom'));
                $settings['telcel'] = formata_TEL($this->input->post('telcel'));
                foreach ($settings as $nome_config => $valor_config):
                    set_setting($nome_config, $valor_config);
                endforeach;
                set_msg('msgok', 'Configurações atualizadas com sucesso', 'sucesso');
                redirect('settings/gerenciar');
            else:
                redirect('settings/gerenciar');
            endif;
        endif;
        init_tema_forms_codemirror();
        set_tema('titulo', 'Configuração do sistema');
        set_tema('conteudo', load_modulo('settings', 'gerenciar'));
        load_template();
    }

}

/* End of file settings.php */
/* Location: ./application/controllers/settings.php */