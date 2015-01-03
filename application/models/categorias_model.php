<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Categorias_model extends CI_Model {
		
	public function do_insert($dados=NULL, $redir=TRUE){
		if ($dados != NULL):
			$this->db->insert('cat_prod', $dados);
			if ($this->db->affected_rows()>0):
				auditoria('Inclusão de categoria', 'Nova categoria cadastrada no sistema');
				set_msg('msgok', 'Cadastro efetuado com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao inserir dados', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function do_update($dados=NULL, $condicao=NULL, $redir=TRUE){
		if ($dados != NULL && is_array($condicao)):
			$this->db->update('cat_prod', $dados, $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Alteração de categorias', 'A categoria com o id "'.$condicao['id'].'" foi alterada');
				set_msg('msgok', 'Alteração efetuada com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao atualizar dados', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
		
	public function do_delete($condicao=NULL, $redir=TRUE){
		if ($condicao != NULL && is_array($condicao)):
			$this->db->delete('cat_prod', $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Exclusão de categoria', 'A categoria com o id "'.$condicao['id'].'" foi excluída');
				set_msg('msgok', 'Registro excluído com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao excluir registro', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function get_all(){
		return $this->db->get('cat_prod');
	}

	public function get_byid($id=NULL){
		if ($id != NULL):
			$this->db->where('id', $id);
			$this->db->limit(1);
			return $this->db->get('cat_prod');
		else:
			return FALSE;
		endif;
	}
                    public function get_pai(){
                        $this->db->where('cat_pai_id', '= 0');
                        return $this->db->get('cat_prod');
	}		
}

/* End of file categorias_model.php */
/* Location: ./application/models/categorias_model.php */