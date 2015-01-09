<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Posts extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		esta_logado();
		$this->load->model('posts_model', 'posts');
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
				$this->posts->do_insert($dados);			
		endif;
                init_tema_forms_simples();
		
		set_tema('titulo', 'Cadastrar nova página');
		set_tema('conteudo', load_modulo('posts', 'cadastrar'));
		load_template();
	}

	public function gerenciar(){
            init_tables();
            set_tema('titulo', 'Páginas');
            set_tema('conteudo', load_modulo('posts', 'gerenciar'));
            load_template();
	}
	
	public function editar(){
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
		$this->form_validation->set_rules('slug', 'SLUG', 'trim');
		$this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
			$dados = elements(array('titulo', 'slug', 'conteudo'), $this->input->post());
				($dados['slug'] != '') ? $dados['slug']=slug($dados['slug']) : $dados['slug']=slug($dados['titulo']);
				$this->posts->do_update($dados, array('id'=>$this->input->post('idpagina')));	
		endif;
                init_tema_forms_simples();
		
		set_tema('titulo', 'Alterar página');
		set_tema('conteudo', load_modulo('posts', 'editar'));
		load_template();
	}
	
	public function excluir(){
		if (is_admin(TRUE)):
			$idpagina = $this->uri->segment(3);
			if ($idpagina != NULL):
				$query = $this->posts->get_byid($idpagina);
				if ($query->num_rows()==1):
					$query = $query->row();
					$this->posts->do_delete(array('id'=>$query->id), FALSE);
				endif;
			else:
				set_msg('msgerro', 'Escolha uma página para excluir', 'erro');
			endif;
		endif;
		redirect('posts/gerenciar');
	}
	
}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */