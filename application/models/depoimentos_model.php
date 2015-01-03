<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Depoimentos_model extends CI_Model {
		
	public function do_insert($dados=NULL, $redir=TRUE){
		if ($dados != NULL):
			$this->db->insert('depoimentos', $dados);
			if ($this->db->affected_rows()>0):
				auditoria('Inclusão de depoimento', 'Novo depoimento cadastrado no sistema');
				set_msg('msgok', 'Cadastro efetuado com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao inserir dados', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	public function do_insert_site($dados=NULL, $redir=TRUE){
		if ($dados != NULL):
			$this->db->insert('depoimentos', $dados);
			if ($this->db->affected_rows()>0):
				auditoria('Inclusão de depoimento', 'Novo depoimento cadastrado no sistema');
				set_msg2('msgok', 'Depoimento enviado com sucesso. Aguarde a aprovação do mesmo!', 'sucesso');
			else:
				set_msg2('msgerro', 'Erro ao inserir dados', 'erro');
			endif;
			if ($redir) redirect(base_url());
		endif;
	}
	
	public function do_update($dados=NULL, $condicao=NULL, $redir=TRUE){
		if ($dados != NULL && is_array($condicao)):
			$this->db->update('depoimentos', $dados, $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Alteração de depoimento', 'O depoimento com o id "'.$condicao['id'].'" foi alterada');
				set_msg('msgok', 'Alteração efetuada com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao atualizar dados', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function do_enable($dados=NULL, $condicao=NULL, $redir=TRUE){
		if ($dados != NULL && is_array($condicao)):
			$this->db->update('depoimentos', $dados, $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Aprovação de depoimento', 'O depoimento com o id "'.$condicao['id'].'" foi aprovado.');
				set_msg('msgok', 'Aprovação efetuada com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao atualizar dados', 'erro');
			endif;
			if ($redir) redirect('depoimentos');
		endif;
	}
	
	public function do_delete($condicao=NULL, $redir=TRUE){
		if ($condicao != NULL && is_array($condicao)):
			$this->db->delete('depoimentos', $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Exclusão de depoimento', 'A depoimento com o id "'.$condicao['id'].'" foi excluída');
				set_msg('msgok', 'Registro excluído com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao excluir registro', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
	
	public function get_all(){
		return $this->db->get('depoimentos');
	}

	public function get_byid($id=NULL){
		if ($id != NULL):
			$this->db->where('id', $id);
			$this->db->limit(1);
			return $this->db->get('depoimentos');
		else:
			return FALSE;
		endif;
	}
	public function get_depo($limite, $offset=0){
                        $this->db->where('status', 1);
                        $this->db->limit($limite, $offset);
                        return $this->db->get('depoimentos');
	}	
}

/* End of file depoimentos_model.php */
/* Location: ./application/models/depoimentos_model.php */