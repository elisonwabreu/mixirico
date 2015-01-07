<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Agenda_model extends CI_Model {
		
	public function do_insert($dados=NULL, $redir=TRUE){
		if ($dados != NULL):
			$this->db->insert('agenda', $dados);
			if ($this->db->affected_rows()>0):
				auditoria('Inclusão de página', 'Nova página cadastrada no sistema');
				set_msg('msgok', 'Cadastro efetuado com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao inserir dados', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function do_update($dados=NULL, $condicao=NULL, $redir=TRUE){
		if ($dados != NULL && is_array($condicao)):
			$this->db->update('agenda', $dados, $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Alteração de página', 'A página com o id "'.$condicao['id'].'" foi alterada');
				set_msg('msgok', 'Alteração efetuada com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao atualizar dados', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function do_delete($condicao=NULL, $redir=TRUE){
		if ($condicao != NULL && is_array($condicao)):
			$this->db->delete('agenda', $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Exclusão de página', 'A página com o id "'.$condicao['id'].'" foi excluída');
				set_msg('msgok', 'Registro excluído com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao excluir registro', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function get_all(){
		return $this->db->get('agenda');
	}

	public function get_byid($id=NULL){
		if ($id != NULL):
			$this->db->where('id', $id);
			$this->db->limit(1);
			return $this->db->get('agenda');
		else:
			return FALSE;
		endif;
	}
		
}

/* End of file agenda_model.php */
/* Location: ./application/models/agenda_model.php */