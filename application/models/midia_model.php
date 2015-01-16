<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Midia_model extends CI_Model {

    public function do_insert($dados = NULL, $redir = TRUE) {
        if ($dados != NULL):
            $this->db->insert('midia', $dados);
            if ($this->db->affected_rows() > 0):
                auditoria('Inclusão de mídia', 'Nova mídia cadastrada no sistema');
                set_msg('msgok', 'Cadastro efetuado com sucesso', 'sucesso');
            else:
                set_msg('msgerro', 'Erro ao inserir dados', 'erro');
            endif;
            if ($redir)
                redirect(current_url());
        endif;
    }
    
    public function do_video_insert($dados = NULL, $redir = TRUE) {
        if ($dados != NULL):
            $this->db->insert('videos', $dados);
            if ($this->db->affected_rows() > 0):
                auditoria('Inclusão de video', 'Novo video cadastrado no sistema');
                set_msg('msgok', 'Cadastro efetuado com sucesso', 'sucesso');
            else:
                set_msg('msgerro', 'Erro ao inserir dados', 'erro');
            endif;
            if ($redir)
                redirect(current_url());
        endif;
    }

    public function do_update($dados = NULL, $condicao = NULL, $redir = TRUE) {
        if ($dados != NULL && is_array($condicao)):
            $this->db->update('midia', $dados, $condicao);
            if ($this->db->affected_rows() > 0):
                auditoria('Alteração de mídia', 'A mídia com o id "' . $condicao['id'] . '" foi alterada');
                set_msg('msgok', 'Alteração efetuada com sucesso', 'sucesso');
            else:
                set_msg('msgerro', 'Erro ao atualizar dados', 'erro');
            endif;
            if ($redir)
                redirect(current_url());
        endif;
    }
    
    public function do_video_update($dados = NULL, $condicao = NULL, $redir = TRUE) {
        if ($dados != NULL && is_array($condicao)):
            $this->db->update('videos', $dados, $condicao);
            if ($this->db->affected_rows() > 0):
                auditoria('Alteração de video', 'O video com o id "' . $condicao['id'] . '" foi alterado');
                set_msg('msgok', 'Alteração efetuada com sucesso', 'sucesso');
            else:
                set_msg('msgerro', 'Erro ao atualizar dados', 'erro');
            endif;
            if ($redir)
                redirect(current_url());
        endif;
    }

    public function do_delete($condicao = NULL, $redir = TRUE) {
        if ($condicao != NULL && is_array($condicao)):
            $this->db->delete('midia', $condicao);
            if ($this->db->affected_rows() > 0):
                auditoria('Exclusão de mídia', 'A mídia com o id "' . $condicao['id'] . '" foi excluída');
                set_msg('msgok', 'Registro excluído com sucesso', 'sucesso');
            else:
                set_msg('msgerro', 'Erro ao excluir registro', 'erro');
            endif;
            if ($redir)
                redirect(current_url());
        endif;
    }
    
    public function do_video_delete($condicao = NULL, $redir = TRUE) {
        if ($condicao != NULL && is_array($condicao)):
            $this->db->delete('videos', $condicao);
            if ($this->db->affected_rows() > 0):
                auditoria('Exclusão de video', 'O video com o id "' . $condicao['id'] . '" foi excluído');
                set_msg('msgok', 'Registro excluído com sucesso', 'sucesso');
            else:
                set_msg('msgerro', 'Erro ao excluir registro', 'erro');
            endif;
            if ($redir)
                redirect(current_url());
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

    public function get_all() {
        return $this->db->get('midia');
    }

    public function get_byid($id = NULL) {
        if ($id != NULL):
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('midia');
        else:
            return FALSE;
        endif;
    }
    public function get_all_by_gal_id($id = NULL) {
        if ($id != NULL):
            $this->db->where('idGal', $id);
            return $this->db->get('midia');
        else:
            return FALSE;
        endif;
    }
    
    public function get_banner() {
        $this->db->where('tipo', 'B');
        $this->db->order_by('id', 'desc');
        $this->db->limit(3);
        return $this->db->get('midia');
    }
    
    public function get_videos($limite, $offset = 0) {
        $this->db->order_by('id','desc');
        $this->db->limit($limite, $offset);
        return $this->db->get('videos');
    }
    
    public function get_imagem_4_desc() {
        $this->db->where('tipo', 'G');
        $this->db->order_by('id', 'desc');
        $this->db->limit(4);
        return $this->db->get('midia');
    }
    
    public function get_video_all() {
        return $this->db->get('videos');
    }
    public function get_video_4_desc() {
        $this->db->order_by('id', 'desc');
        $this->db->limit(4);
        return $this->db->get('videos');
    }
    
    public function get_video_byid($id = NULL) {
        if ($id != NULL):
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('videos');
        else:
            return FALSE;
        endif;
    }

}

/* End of file midia_model.php */
/* Location: ./application/models/midia_model.php */