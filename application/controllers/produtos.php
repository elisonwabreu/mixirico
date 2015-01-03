<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Produtos extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		esta_logado();
		$this->load->model('produtos_model', 'produtos');
		$this->load->model('categorias_model', 'categorias');
	}

	public function index(){
		$this->gerenciar();
	}
	
	public function cadastrar(){
		$this->form_validation->set_rules('cat_prod', 'CATEGORIA DO PRODUTO', 'trim|required');
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
		$this->form_validation->set_rules('slug', 'SLUG', 'trim');
		$this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
			$upload = $this->produtos->do_upload('arquivo');
			if (is_array($upload) && $upload['file_name'] != ''):
				$dados = elements(array('titulo', 'conteudo','preco','slug','cat_prod'), $this->input->post());
				$dados['arquivo'] = $upload['file_name'];
				$dados['tags'] = $dados['titulo'];
				($dados['slug'] != '') ? $dados['slug']=slug($dados['slug']) : $dados['slug']=slug($dados['titulo']);
				$this->produtos->do_insert($dados);	
			else:
				set_msg('msgerro', $upload, 'erro');
				redirect(current_url());
			endif;		
		endif;
		init_htmleditor();
		set_tema('titulo', 'Cadastrar nova página');
		set_tema('conteudo', load_modulo('produtos', 'cadastrar'));
		load_template();
	}

	public function gerenciar(){
		set_tema('footerinc', load_js(array('icheck.min'),'assets/admin/atlant/js/plugins/icheck'), FALSE);
                set_tema('footerinc', load_js(array('jquery.mCustomScrollbar.min'),'assets/admin/atlant/js/plugins/mcustomscrollbar'), FALSE);
                set_tema('footerinc', load_js(array('jquery.dataTables.min'),'assets/admin/atlant/js/plugins/datatables'), FALSE);
                set_tema('footerinc', load_js(array('settings'),'assets/admin/atlant/js'), FALSE);
		set_tema('titulo', 'Páginas');
		set_tema('conteudo', load_modulo('produtos', 'gerenciar'));
		load_template();
	}
	
	public function editar(){
		$this->form_validation->set_rules('cat_prod', 'CATEGORIA DO PRODUTO', 'trim|required');
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
		$this->form_validation->set_rules('slug', 'SLUG', 'trim');
		$this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
			$dados = elements(array('titulo', 'conteudo','preco','slug','cat_prod'), $this->input->post());
				($dados['tags'] != '') ? $dados['tags']=slug($dados['tags']) : $dados['tags']=slug($dados['titulo']);
				($dados['slug'] != '') ? $dados['slug']=slug($dados['slug']) : $dados['slug']=slug($dados['titulo']);
				$this->produtos->do_update($dados, array('id'=>$this->input->post('idprodutos')));	
		endif;
		init_htmleditor();
		set_tema('titulo', 'Alterar página');
		set_tema('conteudo', load_modulo('produtos', 'editar'));
		load_template();
	}
	
	public function excluir(){
		if (is_admin(TRUE)):
			$idpagina = $this->uri->segment(3);
			if ($idpagina != NULL):
				$query = $this->produtos->get_byid($idpagina);
				if ($query->num_rows()==1):
					$query = $query->row();
					$this->produtos->do_delete(array('id'=>$query->id), FALSE);
				endif;
			else:
				set_msg('msgerro', 'Escolha uma página para excluir', 'erro');
			endif;
		endif;
		redirect('produtos/gerenciar');
	}
	
}

/* End of file produtos.php */
/* Location: ./application/controllers/produtos.php */