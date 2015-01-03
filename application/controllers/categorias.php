<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Categorias extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		esta_logado();
		$this->load->model('categorias_model', 'categorias');
	}

	public function index(){
		$this->gerenciar();
	}
	
	public function cadastrar(){
		$this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
		$this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
		if ($this->form_validation->run()==TRUE):
                                            $dados = elements(array('nome','cat_pai_id', 'descricao'), $this->input->post());
                                            $dados['tags'] = slug($dados['nome']);
                                            $dados['slug'] = slug($dados['nome']);
                                            $this->categorias->do_insert($dados);
                                            redirect(current_url());
		endif;
		set_tema('titulo', 'Cadastro de Categorias');
		set_tema('conteudo', load_modulo('categorias', 'cadastrar'));
		load_template();
	}

	public function gerenciar(){
		set_tema('footerinc', load_js(array('icheck.min'),'assets/admin/atlant/js/plugins/icheck'), FALSE);
                set_tema('footerinc', load_js(array('jquery.mCustomScrollbar.min'),'assets/admin/atlant/js/plugins/mcustomscrollbar'), FALSE);
                set_tema('footerinc', load_js(array('jquery.dataTables.min'),'assets/admin/atlant/js/plugins/datatables'), FALSE);
		set_tema('titulo', 'Listagem de mídias');
		set_tema('conteudo', load_modulo('categorias', 'gerenciar'));
		load_template();
	}

	public function editar(){
		$this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
		$this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
		if ($this->form_validation->run()==TRUE):
                    $dados = elements(array('nome','cat_pai_id', 'descricao'), $this->input->post());
                    $dados['tags'] = slug($dados['nome']);
                    $dados['slug'] = slug($dados['nome']);
                    $this->categorias->do_update($dados, array('id'=>$this->input->post('idcategorias')));	
		endif;
		set_tema('titulo', 'Alteração de mídia');
		set_tema('conteudo', load_modulo('categorias', 'editar'));
		load_template();
	}

	public function excluir(){
		if (is_admin(TRUE)):
			$idcategorias = $this->uri->segment(3);
			if ($idcategorias != NULL):
				$query = $this->categorias->get_byid($idcategorias);
				if ($query->num_rows()==1):
					$query = $query->row();
					$this->categorias->do_delete(array('id'=>$query->id), FALSE);
				endif;
			else:
				set_msg('msgerro', 'Escolha uma mídia para excluir', 'erro');
			endif;
		endif;
		redirect('categorias/gerenciar');
	}
	
	public function get_imgs(){
		header('Content-Type: application/x-json; charset=utf-8');
		$this->db->like('nome', $this->input->post('pesquisarimg'));
		if ($this->input->post('pesquisarimg')=='') $this->db->limit(10);
		$this->db->order_by('id', 'DESC');
		$query = $this->categorias->get_all();
		$retorno = 'Nenhum resultado econtrado com base em sua pesquisa';
		if ($query->num_rows()>0):
			$retorno = '';
			$query = $query->result();
			foreach ($query as $linha):
				$retorno .= '<a href="javascript:;" onclick="$(\'.assets/htmleditor\').tinymce().execCommand(\'mceInsertContent\',false,\'<img src='.base_url("assets/uploads/$linha->arquivo").' />\');return false;">';
				$retorno .= '<img src="'.thumb($linha->arquivo,300,180,FALSE).'" class="retornoimg" alt="'.$linha->nome.'" title="Clique para inserir" /></a>';
			endforeach;
		endif;
		echo (json_encode($retorno));
	}
	
}

/* End of file categorias.php */
/* Location: ./application/controllers/categorias.php */