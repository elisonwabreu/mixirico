<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Instalar extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        init_painel();
        $this->form_validation->set_rules('url_base', 'URL', 'trim|required|strtolower');
        $this->form_validation->set_rules('chave_seguranca', 'CHAVE DE SEGURANÇA', 'trim|required|strtolower');
        $this->form_validation->set_rules('tempo_sessao', 'TEMPO DA SESSÃO', 'trim|required|numeric');
        $this->form_validation->set_rules('hostname', 'SERVIDOR', 'trim|required');
        $this->form_validation->set_rules('username', 'USUÁRIO', 'trim|required');
        $this->form_validation->set_rules('password', 'SENHA', 'trim');
        $this->form_validation->set_rules('database', 'NOME DO BD', 'trim|required');
        $this->form_validation->set_rules('user_nome', 'NOME COMPLETO', 'trim|required|ucwords');
        $this->form_validation->set_rules('user_email', 'EMAIL', 'trim|required|valid_email|strtolower');
        $this->form_validation->set_rules('user_login', 'LOGIN', 'trim|required|min_length[4]|strtolower');
        $this->form_validation->set_rules('user_senha', 'SENHA', 'trim|required|min_length[4]|strtolower');
        if ($this->form_validation->run() == TRUE):
            //criar arquivos
            $this->load->helper('file');
            $file_config = '<?php  if ( ! defined("BASEPATH")) exit("Não é permitido acesso direto ao caminho informado!");
                            $config["base_url"]                         = "' . $this->input->post('url_base') . '";
                            $config["index_page"]                    = "";
                            $config["uri_protocol"]                  = "AUTO";
                            $config["url_suffix"]                        = "";
                            $config["language"]                       = "pt-BR";
                            $config["charset"]                          = "UTF-8";
                            $config["enable_hooks"]               = FALSE;
                            $config["subclass_prefix"]             = "DT_";
                            $config["permitted_uri_chars"]     = "a-z 0-9~%.:_\-";
                            $config["allow_get_array"]            = TRUE;
                            $config["enable_query_strings"]   = FALSE;
                            $config["controller_trigger"]         = "c";
                            $config["function_trigger"]            = "m";
                            $config["directory_trigger"]          = "d";
                            $config["log_threshold"]                = 0;
                            $config["log_path"]                        = "";
                            $config["log_date_format"]           = "Y-m-d H:i:s";
                            $config["cache_path"]                    = "";
                            $config["encryption_key"]             = "' . $this->input->post('chave_seguranca') . '";
                            $config["sess_cookie_name"]	     = "ci_session";
                            $config["sess_expiration"]	     = ' . $this->input->post('tempo_sessao') . ';
                            $config["sess_expire_on_close"]    = TRUE;
                            $config["sess_encrypt_cookie"]     = TRUE;
                            $config["sess_use_database"]	     = FALSE;
                            $config["sess_table_name"]	     = "ci_sessions";
                            $config["sess_match_ip"]	     = TRUE;
                            $config["sess_match_useragent"]  = TRUE;
                            $config["sess_time_to_update"]     = 300;
                            $config["cookie_prefix"]	     = "";
                            $config["cookie_domain"]	     = "";
                            $config["cookie_path"]	     = "/";
                            $config["cookie_secure"]	     = FALSE;
                            $config["global_xss_filtering"]      = FALSE;
                            $config["csrf_protection"]             = FALSE;
                            $config["csrf_token_name"]          = "csrf_test_name";
                            $config["csrf_cookie_name"]        = "csrf_cookie_name";
                            $config["csrf_expire"]                   = 7200;
                            $config["compress_output"]         = FALSE;
                            $config["time_reference"]             = "local";
                            $config["rewrite_short_tags"]        = FALSE;
                            $config["proxy_ips"]                      = "";
                    /* End of file config.php */
                    /* Location: ./application/config/config.php */
                    ';
            write_file('./application/config/config.php', trim($file_config));

            $file_bd = '<?php  if ( ! defined("BASEPATH")) exit("Não é permitido acesso direto ao caminho informado!");
                            $active_group = "default";
                            $active_record = TRUE;
                            $db["default"]["hostname"] = "' . $this->input->post('hostname') . '";
                            $db["default"]["username"] = "' . $this->input->post('username') . '";
                            $db["default"]["password"] = "' . $this->input->post('password') . '";
                            $db["default"]["database"] = "' . $this->input->post('database') . '";
                            $db["default"]["dbdriver"] = "mysql";
                            $db["default"]["dbprefix"] = "";
                            $db["default"]["pconnect"] = TRUE;
                            $db["default"]["db_debug"] = TRUE;
                            $db["default"]["cache_on"] = FALSE;
                            $db["default"]["cachedir"] = "";
                            $db["default"]["char_set"] = "utf8";
                            $db["default"]["dbcollat"] = "utf8_general_ci";
                            $db["default"]["swap_pre"] = "";
                            $db["default"]["autoinit"] = TRUE;
                            $db["default"]["stricton"] = FALSE;
                    /* End of file database.php */
                    /* Location: ./application/config/database.php */
			';
            write_file('./application/config/database.php', trim($file_bd));
            
            $file_auto_load = '<?php  if ( ! defined("BASEPATH")) exit("Não é permitido acesso direto ao caminho informado!");
                                $autoload["packages"] = array();
                              
                                $autoload["libraries"] = array("database");
                              
                                $autoload["helper"] = array("funcoes");
                                
                                $autoload["config"] = array();
                               
                                $autoload["language"] = array();
                                
                                $autoload["model"] = array();
                                /* End of file autoload.php */
                                /* Location: ./application/config/autoload.php */
			';
            write_file('./application/config/autoload.php', trim($file_auto_load));

            //conectar bd
            $this->load->database();
            $this->db->reconnect();

            //criar tabelas
            $sql_bd = "
				CREATE TABLE IF NOT EXISTS `auditoria` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `usuario` varchar(45) NOT NULL,
				  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  `operacao` varchar(45) NOT NULL,
				  `query` text NOT NULL,
				  `observacao` text NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
			";
            $this->db->query($sql_bd);

            $sql_bd = "
				CREATE TABLE IF NOT EXISTS `cat_prod` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
                                                                                  `cat_pai_id` INT(11),
				  `nome` varchar(70) NOT NULL,
				  `descricao` longtext NOT NULL,
				  `slug` varchar(100) NOT NULL,
				  `tags` varchar(100) NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;
			";
            $this->db->query($sql_bd);

            $sql_bd = "
				CREATE TABLE IF NOT EXISTS `midia` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `nome` varchar(45) NOT NULL,
				  `descricao` varchar(255) NOT NULL,
				  `arquivo` varchar(255) NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
			";
            $this->db->query($sql_bd);

            $sql_bd = "
				CREATE TABLE IF NOT EXISTS `produtos` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `titulo` varchar(255) NOT NULL,
				  `cat_prod` int(11) NOT NULL,
				  `preco` float NOT NULL,
				  `arquivo` varchar(255) NOT NULL,
				  `slug` varchar(255) NOT NULL,
				  `tags` varchar(100) NOT NULL,
				  `conteudo` longtext NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
			";
            $this->db->query($sql_bd);

            $sql_bd = "
				CREATE TABLE IF NOT EXISTS `settings` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `nome_config` varchar(255) NOT NULL,
				  `valor_config` text NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
			";
            $this->db->query($sql_bd);

            $sql_bd = "
				CREATE TABLE IF NOT EXISTS `usuarios` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `nome` varchar(100) NOT NULL,
				  `email` varchar(100) NOT NULL,
				  `login` varchar(45) NOT NULL,
				  `senha` varchar(32) NOT NULL,
				  `ativo` tinyint(1) NOT NULL DEFAULT '1',
				  `adm` tinyint(1) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
			";
            $criacao_bd = $this->db->query($sql_bd);

            //criar o primeiro usuario
            if ($criacao_bd == TRUE):
                $dados["nome"] = $this->input->post('user_nome');
                $dados["email"] = $this->input->post('user_email');
                $dados["login"] = $this->input->post('user_login');
                $dados["senha"] = md5($this->input->post('user_senha'));
                $dados["adm"] = 1;
                $usuario = $this->db->insert('usuarios', $dados);
                if ($usuario == TRUE)
                    redirect('instalar/sucesso');
            endif;
        endif;
        set_tema('titulo', 'Instalação do sistema');
        set_tema('conteudo', load_modulo('instalar', 'instalar'));
        set_tema('rodape', '');
        load_template();
    }

    public function sucesso() {
        init_painel();
        set_tema('titulo', 'Instalação concluída');
        set_tema('conteudo', load_modulo('instalar', 'sucesso'));
        set_tema('rodape', '');
        load_template();
    }

}

/* End of file instalar.php */
/* Location: ./application/controllers/instalar.php */