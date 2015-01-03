<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_site();
        $this->load->model('midia_model', 'midia');
        $this->load->model('depoimentos_model', 'depoimentos');        
        $this->load->model('produtos_model', 'produtos');
    }

    public function index() {
        $this->inicio();
    }

    public function inicio() {
        set_tema('titulo', 'Estampas & Bordados!');
        set_tema('description', 'Estampas & Bordados!');
        set_tema('keywords', 'Estampas & Bordados, estamapas, bordados, sublimação, canecas, camisas');
        set_tema('conteudo', load_modulo('home', 'home', 'site'));
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
		set_tema('titulo', '.:: PRODUTOS ::. ');
        set_tema('titulo', 'Comentários realizados por nosso clientes.');
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
        set_tema('titulo', '.:: PRODUTOS POR CATEGORIA ::. ');
        set_tema('conteudo', load_modulo('produtos', 'categoria', 'site'));
        load_template();
    }
    public function sobre() {
        set_tema('titulo', 'Sobre nós!');
        set_tema('conteudo', load_modulo('sobre', 'sobre', 'site'));
        load_template();
    }
    public function detalhes() {
        set_tema('titulo', 'Detalhes do Produto!');
        set_tema('conteudo', load_modulo('produtos', 'detalhes', 'site'));
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
        set_tema('titulo', 'Contato Realizado');
        set_tema('conteudo', load_modulo('site', 'contato_sucesso', 'site'));
        load_template();
    }
	public function contato_erro() {
        set_tema('titulo', 'Não foi possível realizar o contato.');
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