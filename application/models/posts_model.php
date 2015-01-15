<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Posts_model extends CI_Model {
		
	public function do_insert($dados=NULL, $redir=TRUE){
		if ($dados != NULL):
			$this->db->insert('posts', $dados);
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
			$this->db->update('posts', $dados, $condicao);
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
			$this->db->delete('posts', $condicao);
			if ($this->db->affected_rows()>0):
				auditoria('Exclusão de página', 'A página com o id "'.$condicao['id'].'" foi excluída');
				set_msg('msgok', 'Registro excluído com sucesso', 'sucesso');
			else:
				set_msg('msgerro', 'Erro ao excluir registro', 'erro');
			endif;
			if ($redir) redirect(current_url());
		endif;
	}
        
        public function do_upload($campo) {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10240';
            $config['max_width'] = '15000';
            $config['max_height'] = '15000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload($campo)):
                return $this->upload->data();
            else:
                return $this->upload->display_errors();
            endif;
        }
        
        public function get_posts($limite, $offset = 0) {
            $this->db->order_by('id','desc');
            $this->db->limit($limite, $offset);
            return $this->db->get('posts');
        }
	
	public function get_all(){
		return $this->db->get('posts');
	}

	public function get_byid($id=NULL){
		if ($id != NULL):
			$this->db->where('id', $id);
			$this->db->limit(1);
			return $this->db->get('posts');
		else:
			return FALSE;
		endif;
	}
        
        public function get_byslug($slug = NULL) {
            if ($slug != NULL):
                $this->db->where('slug', $slug);
                $this->db->limit(1);
                return $this->db->get('posts');
            else:
                return FALSE;
            endif;
        }       
		
}

/* End of file posts_model.php */
/* Location: ./application/models/posts_model.php */