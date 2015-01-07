<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Paginas extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		esta_logado();
		$this->load->model('paginas_model', 'paginas');
	}

	public function index(){
		$this->gerenciar();
	}
	
	public function cadastrar(){
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
		$this->form_validation->set_rules('slug', 'SLUG', 'trim');
		$this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
			$dados = elements(array('titulo', 'slug', 'conteudo'), $this->input->post());
                        ($dados['slug'] != '') ? $dados['slug']=slug($dados['slug']) : $dados['slug']=slug($dados['titulo']);
                        $this->paginas->do_insert($dados);			
		endif;
		init_htmleditor();
		set_tema('titulo', 'Cadastrar nova página');
		set_tema('conteudo', load_modulo('paginas', 'cadastrar'));
		load_template();
	}

	public function gerenciar(){
		set_tema('footerinc', load_js(array('icheck.min'),'assets/admin/atlant/js/plugins/icheck'), FALSE);
                set_tema('footerinc', load_js(array('jquery.mCustomScrollbar.min'),'assets/admin/atlant/js/plugins/mcustomscrollbar'), FALSE);
                set_tema('footerinc', load_js(array('jquery.dataTables.min'),'assets/admin/atlant/js/plugins/datatables'), FALSE);
                set_tema('footerinc', load_js(array('settings'),'assets/admin/atlant/js'), FALSE);
		set_tema('titulo', 'Páginas');
		set_tema('conteudo', load_modulo('paginas', 'gerenciar'));
		load_template();
	}
	
	public function editar(){
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
		$this->form_validation->set_rules('slug', 'SLUG', 'trim');
		$this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
			$dados = elements(array('titulo', 'slug', 'conteudo'), $this->input->post());
				($dados['slug'] != '') ? $dados['slug']=slug($dados['slug']) : $dados['slug']=slug($dados['titulo']);
				$this->paginas->do_update($dados, array('id'=>$this->input->post('idpagina')));	
		endif;
		init_htmleditor();
		set_tema('titulo', 'Alterar página');
		set_tema('conteudo', load_modulo('paginas', 'editar'));
		load_template();
	}
	
	public function excluir(){
		if (is_admin(TRUE)):
			$idpagina = $this->uri->segment(3);
			if ($idpagina != NULL):
				$query = $this->paginas->get_byid($idpagina);
				if ($query->num_rows()==1):
					$query = $query->row();
					$this->paginas->do_delete(array('id'=>$query->id), FALSE);
				endif;
			else:
				set_msg('msgerro', 'Escolha uma página para excluir', 'erro');
			endif;
		endif;
		redirect('paginas/gerenciar');
	}
	
}

/* End of file paginas.php */
/* Location: ./application/controllers/paginas.php */