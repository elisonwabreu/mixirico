<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_site();
        $this->load->model('midia_model', 'midia');
        $this->load->model('depoimentos_model', 'depoimentos');        
        $this->load->model('produtos_model', 'produtos');
        $this->load->model('posts_model', 'posts');
    }

    public function index() {
        $this->inicio();
    }

    public function inicio() {
        $this->start = $this->uri->segment(3);
        if (trim($this->start) == '') {
                $this->start = 0;
        }
        $this->mostrar_por_pagina = 10;		
        $this->listPosts           = $this->posts->get_posts($this->mostrar_por_pagina, $this->start)->result();
        $this->numero_itens        = $this->db->get('posts')->num_rows();
        $config['base_url']        = base_url().'site/inicio';
        $config['total_rows']      = $this->numero_itens;
        $config['per_page']        = $this->mostrar_por_pagina;
        $config['num_link']        = 2;		
        $config['uri_segment']     = 3;	
        $config['display_pages']   = FALSE;
        $this->pagination->initialize($config);
        $this->paginar = $this->pagination->create_links();
        set_tema('titulo', get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('home', 'home', 'site'));
        load_template();
    }
    
    public function videos() {
        $this->start = $this->uri->segment(3);
        if (trim($this->start) == '') {
                $this->start = 0;
        }
        $this->mostrar_por_pagina = 12;		
        $this->listVideos           = $this->midia->get_videos($this->mostrar_por_pagina, $this->start)->result();
        $this->numero_itens        = $this->db->get('videos')->num_rows();
        $config['base_url']        = base_url().'site/videos';
        $config['total_rows']      = $this->numero_itens;
        $config['per_page']        = $this->mostrar_por_pagina;
        $config['num_link']        = 4;		
        $config['uri_segment']     = 3;	
        $config['full_tag_open']   = '<nav><ul class="pagination pagination-lg">';
        $config['full_tag_close']  = '</ul>';
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $this->paginar = $this->pagination->create_links();
        set_tema('titulo', 'Videos - '.get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('videos', 'videos', 'site'));
        load_template();
    }

    public function produtos() {
        $this->start = $this->uri->segment(3);
        if (trim($this->start) == '') {
                $this->start = 0;
        }
        $this->mostrar_por_pagina = 24;		
        $this->listProdutos = $this->produtos->get_page($this->mostrar_por_pagina, $this->start)->result();
        $this->numero_itens = $this->db->get('produtos')->num_rows();
        $config['base_url']        = base_url().'site/produtos';
        $config['total_rows']      = $this->numero_itens;
        $config['per_page']        = $this->mostrar_por_pagina;
        $config['num_link']        = 3;		
        $config['uri_segment']     = 3;	
        $this->pagination->initialize($config);
        $this->paginar = $this->pagination->create_links();
        set_tema('titulo', '.:: PRODUTOS ::.  ' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('produtos', 'listar', 'site'));
        load_template();
    }
    public function categoria() {
        $this->start = $this->uri->segment(4);
        if (trim($this->start) == '') {
                $this->start = 0;
        }
        $this->mostrar_por_pagina = 24;	
        $idCat = $this->uri->segment(3);
        $this->listProdutos = $this->produtos->get_page_bycatid($this->mostrar_por_pagina, $this->start, $idCat)->result();
        $this->numero_itens = $this->produtos->get_all_cat($idCat)->num_rows();
        $config['base_url']        = base_url().'site/categoria';
        $config['total_rows']      = $this->numero_itens;
        $config['per_page']        = $this->mostrar_por_pagina;
        $config['num_link']        = 3;		
        $config['uri_segment']     = 4;	
        $this->pagination->initialize($config);
        $this->paginar = $this->pagination->create_links();
        set_tema('titulo', '.:: PRODUTOS POR CATEGORIA ::.  ' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('produtos', 'categoria', 'site'));
        load_template();
    }
    public function sobre() {
        set_tema('titulo', 'Sobre nós! ' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('sobre', 'sobre', 'site'));
        load_template();
    }
    public function detalhes() {
        set_tema('titulo', 'Detalhes do Produto! ' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('produtos', 'detalhes', 'site'));
        load_template();
    }
    public function post() {
        set_tema('titulo', 'Post - '.$this->uri->segment(3). '' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('posts', 'single', 'site'));
        load_template();
    }
    public function faleconosco(){
            $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('email', 'E-MAIL', 'trim|required');
            $this->form_validation->set_rules('assunto', 'ASSUNTO', 'trim|required');
            $this->form_validation->set_rules('mensagem', 'MENSAGEM', 'trim');
            if ($this->form_validation->run()==TRUE):
                    $dados['nome'] = $this->input->post('nome');
                    $dados['email'] = $this->input->post('email');
                    $dados['assunto'] = $this->input->post('assunto');
                    $dados['mensagem'] = $this->input->post('mensagem') .'<br/>'. date('d/m/Y H:i:s');
                    if ($this->sistema->enviar_email(get_setting('emailcom'), $dados['assunto'] . ' - ' . $dados['nome'] .' '. $dados['email'], $dados['mensagem'])) {
                            set_msg('msgok', 'E-mail enviado com sucesso', 'sucesso');
                            redirect('site/faleconosco');
                    }else{
                            set_msg('msgerro', 'Não foi possivel enviar o e-mail! Tente novamente mais tarde.', 'erro');
                            redirect('site/faleconosco');
                    }
            endif;
            $this->load->library('googlemaps');

            $config['center']          = get_setting('rua').', '. get_setting('bairro').', '.get_setting('cid_uf');
            $config['zoom']            = 'auto';
            $config['directions']      = TRUE;
            $config['directionsStart'] = get_setting('rua').', '. get_setting('bairro').', '.get_setting('cid_uf');
            $config['directionsEnd']   = get_setting('rua').', '. get_setting('bairro').', '.get_setting('cid_uf');
            $config['directionsDivID'] = 'directionsDiv';
            $this->googlemaps->initialize($config);
            $data['map'] = $this->googlemaps->create_map();
            set_tema('titulo', '.:: FALE CONOSCO ::.');
            set_tema('description', resumo_post(get_setting('txt_home'), 80, true, true));
            set_tema('keywords', get_setting('keywords'));
            set_tema('conteudo', load_modulo( 'faleconosco', 'faleconosco', 'site', $data));
            load_template();
    }
    
//    public function depoimentos() {
//        $this->start = $this->uri->segment(3);
//        if (trim($this->start) == '') {
//                $this->start = 0;
//        }
//        $this->mostrar_por_pagina = 10;		
//        $this->listDepoimentos = $this->depoimentos->get_depo($this->mostrar_por_pagina, $this->start)->result();
//        $this->numero_itens = $this->db->get('depoimentos')->num_rows();
//        $config['base_url']        = base_url().'site/depoimentos';
//        $config['total_rows']      = $this->numero_itens;
//        $config['per_page']        = $this->mostrar_por_pagina;
//        $config['num_link']        = 3;		
//        $config['uri_segment']     = 3;	
//        $this->pagination->initialize($config);
//        $this->paginar = $this->pagination->create_links();
//        set_tema('titulo', 'Comentários realizados por nosso clientes.');
//        set_tema('conteudo', load_modulo('site', 'depoimentos', 'site'));
//        load_template();
//    }
    public function contato_sucesso() {
        set_tema('titulo', 'Contato Realizado! ' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('site', 'contato_sucesso', 'site'));
        load_template();
    }
	public function contato_erro() {
        set_tema('titulo', 'Não foi possível realizar o contato! ' . get_setting('nome_site'));
        set_tema('description', get_setting('descricao_site'));
        set_tema('keywords', get_setting('keywords_site'));
        set_tema('conteudo', load_modulo('site', 'contato_erro', 'site'));
        load_template();
    }
//    public function send_depo(){
//            $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
//            $this->form_validation->set_rules('depoimento', 'DEPOIMENTO', 'trim|required|htmlentities');
//            if ($this->form_validation->run()==TRUE):
//                                        $dados = elements(array('nome', 'depoimento', 'data'), $this->input->post());
//                                        $this->depoimentos->do_insert_site($dados);			
//            endif;
//    }

}

/* End of file Site.php */
/* Location: ./application/controllers/Site.php */