<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Agenda extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		esta_logado();
		$this->load->model('agenda_model', 'agenda');
	}

	public function index(){
		$this->gerenciar();
	}
	
	public function cadastrar(){
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
//		$this->form_validation->set_rules('slug', 'SLUG', 'trim');
//		$this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
                        $upload = $this->agenda->do_upload('banner');
			if (is_array($upload) && $upload['file_name'] != ''):
				$dados = elements(array('titulo', 'descricao', 'data', 'hora', 'logradouro', 'bairro', 'numero', 'cidade', 'estado'), $this->input->post());
				$dados['banner'] = $upload['file_name'];
				$this->agenda->do_insert($dados);	
			else:
				set_msg('msgerro', $upload, 'erro');
				redirect(current_url());
			endif;	
		endif;
                init_tema_forms_simples();
		
		set_tema('titulo', 'Cadastrar nova página');
		set_tema('conteudo', load_modulo('agenda', 'cadastrar'));
		load_template();
	}

	public function gerenciar(){
                init_tables();
		set_tema('titulo', 'Páginas');
		set_tema('conteudo', load_modulo('agenda', 'gerenciar'));
		load_template();
	}
	
	public function editar(){
		$this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required|ucfirst');
		$this->form_validation->set_rules('descricao', 'DESCRIÇÂO', 'trim|required|htmlentities');
		if ($this->form_validation->run()==TRUE):
			$dados = elements(array('titulo', 'descricao', 'data', 'hora', 'logradouro', 'bairro', 'numero', 'cidade', 'estado'), $this->input->post());
				$this->agenda->do_update($dados, array('id'=>$this->input->post('idpagina')));	
		endif;
                init_tema_forms_simples();
		
		set_tema('titulo', 'Alterar página');
		set_tema('conteudo', load_modulo('agenda', 'editar'));
		load_template();
	}
	
	public function excluir(){
		if (is_admin(TRUE)):
			$idpagina = $this->uri->segment(3);
			if ($idpagina != NULL):
				$query = $this->agenda->get_byid($idpagina);
				if ($query->num_rows()==1):
					$query = $query->row();
					$this->agenda->do_delete(array('id'=>$query->id), FALSE);
				endif;
			else:
				set_msg('msgerro', 'Escolha uma página para excluir', 'erro');
			endif;
		endif;
		redirect('agenda/gerenciar');
	}
	
}

/* End of file agenda.php */
/* Location: ./application/controllers/agenda.php */