<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Midia extends CI_Controller {
		
	public function __construct(){
            parent::__construct();
            init_painel();
            esta_logado();
            $this->load->model('midia_model', 'midia');
            $this->load->model('galerias_model', 'galerias');
	}

	public function index(){
            $this->gerenciar();
	}
	
	public function cadastrar(){
            $this->form_validation->set_rules('tipo', 'TIPO', 'trim|required');
            $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $upload = $this->midia->do_upload('arquivo');
                if (is_array($upload) && $upload['file_name'] != ''):
                    $dados = elements(array('tipo','nome', 'descricao'), $this->input->post());
                    $dados['arquivo'] = $upload['file_name'];
                    $this->midia->do_insert($dados);
                else:
                    set_msg('msgerro', $upload, 'erro');
                    redirect(current_url());
                endif;
            endif;
            init_tema_forms_simples();           
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar'));
            load_template();
	}
        
        public function cadastrar_galeria(){
            $this->form_validation->set_rules('titulo', 'TITULO', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $upload = $this->midia->do_upload('arquivo');
                if (is_array($upload) && $upload['file_name'] != ''):
                    $dados = elements(array('titulo','descricao'), $this->input->post());
                    $dados['arquivo'] = $upload['file_name'];
                    $this->galerias->do_insert($dados);
                else:
                    set_msg('msgerro', $upload, 'erro');
                    redirect(current_url());
                endif;
            endif;
            init_tema_forms_simples();  
            //init_tema_forms_full();    
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar-galeria'));
            load_template();
	}
        public function cadastrar_img_galeria(){
            init_tema_forms_full();    
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar-img-galeria'));
            load_template();
	}
        
        public function do_upload() {
            $upload_path_url = base_url() . 'assets/uploads/';

            $config['upload_path'] = FCPATH . 'assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '30000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                //$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload', $error);

                //Load the list of existing files in the upload directory
                $existingFiles = get_dir_file_info($config['upload_path']);
                $foundFiles = array();
                $f=0;
                foreach ($existingFiles as $fileName => $info) {
                  if($fileName!='thumbs'){//Skip over thumbs directory
                    //set the data for the json array   
                    $foundFiles[$f]['name'] = $fileName;
                    $foundFiles[$f]['size'] = $info['size'];
                    $foundFiles[$f]['url'] = $upload_path_url . $fileName;
                    $foundFiles[$f]['thumbnailUrl'] = $upload_path_url . 'thumbs/' . $fileName;
                    $foundFiles[$f]['deleteUrl'] = base_url() . 'upload/deleteImage/' . $fileName;
                    $foundFiles[$f]['deleteType'] = 'DELETE';
                    $foundFiles[$f]['error'] = null;

                    $f++;
                  }
                }
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('files' => $foundFiles)));
            } else {
                $data = $this->upload->data();
                
                $dados['idGal'] = $this->uri->segment(3);
                $dados['tipo'] = 'G';
                $dados['nome'] = $data['file_name'];
                $dados['descricao'] = 'Upload via Ajax.';
                $dados['arquivo'] = $data['file_name'];
                
                $debug = $this->midia->do_insert($dados);
                
                  
                $this->fb->info($debug);
                $this->fb->info($dados);
                // to re-size for thumbnail images un-comment and set path here and in json array
                $config = array();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $data['full_path'];
                $config['create_thumb'] = TRUE;
                $config['new_image'] = $data['file_path'] . 'thumbs/';
                $config['maintain_ratio'] = TRUE;
                $config['thumb_marker'] = '';
                $config['width'] = 75;
                $config['height'] = 50;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();


                //set the data for the json array
                $info = new StdClass;
                $info->name = $data['file_name'];
                $info->size = $data['file_size'] * 1024;
                $info->type = $data['file_type'];
                $info->url = $upload_path_url . $data['file_name'];
                // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
                $info->thumbnailUrl = $upload_path_url . 'thumbs/' . $data['file_name'];
                $info->deleteUrl = base_url() . 'upload/deleteImage/' . $data['file_name'];
                $info->deleteType = 'DELETE';
                $info->error = null;

                $files[] = $info;
                //this is why we put this in the constants to pass only json data
                if (IS_AJAX) {
                    echo json_encode(array("files" => $files));
                    //this has to be the only data returned or you will get an error.
                    //if you don't give this a json array it will give you a Empty file upload result error
                    //it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)
                    // so that this will still work if javascript is not enabled
                } else {
                    $file_data['upload_data'] = $this->upload->data();
                    $this->load->view('upload/upload_success', $file_data);
                }
            }
        }
        
        public function cadastrar_video(){
            $this->form_validation->set_rules('embed', 'URL DO VIDEO', 'trim|required|ucfirst');
            if ($this->form_validation->run()==TRUE):
                //$dados = elements(array('titulo', 'descricao', 'thumb', 'embed', 'server'), $this->input->post());
                $dados = elements(array('embed'), $this->input->post());
                if(substr_count($dados['embed'], 'youtube') == 1){
			$dados['embed']     = substr($dados['embed'], 32, 11);
			$dados['thumb']     = 'http://i1.ytimg.com/vi/'.$dados['embed'].'/default.jpg';
			$conteudo           = get_meta_tags('https://www.youtube.com/watch?v='.$dados['embed']);
			$dados['titulo']    = $conteudo['title'];
			$dados['descricao'] = $conteudo['description'];
			$dados['server']    = 'YouTube';
		}elseif(substr_count($dados['embed'], 'vimeo') == 1){
			$idVid              = substr($dados['embed'], 17);
			$url_img            = parse_url($dados['embed']);
			$conteudo           = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".substr($url_img['path'], 1).".php"));
			$dados['thumb']     = $conteudo[0]['thumbnail_small'];
			$dados['titulo']    = $conteudo[0]['title'];
			$dados['descricao'] = $conteudo[0]['description'];
			$dados['server']    = 'Vimeo';
		}
                $this->midia->do_video_insert($dados);
            endif;
            init_tema_forms_simples();                
            set_tema('titulo', 'Upload de imagens');
            set_tema('conteudo', load_modulo('midia', 'cadastrar-video'));
            load_template();
	}

	public function gerenciar(){
            init_tables();
            set_tema('titulo', 'Listagem de mídias');
            set_tema('conteudo', load_modulo('midia', 'gerenciar'));
            load_template();
	}
        public function gerenciar_video(){
            init_tables();
            set_tema('titulo', 'Listagem de mídias');
            set_tema('conteudo', load_modulo('midia', 'gerenciar-videos'));
            load_template();
	}
        
        public function gerenciar_galeria(){
            init_tables();
            set_tema('titulo', 'Listagem de mídias');
            set_tema('conteudo', load_modulo('midia', 'gerenciar-galeria'));
            load_template();
	}

	public function editar(){
            $this->form_validation->set_rules('tipo', 'TIPO', 'trim|required');
            $this->form_validation->set_rules('nome', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $dados = elements(array('tipo','nome', 'descricao'), $this->input->post());
                $this->midia->do_update($dados, array('id'=>$this->input->post('idmidia')));
            endif;
            init_tema_forms_simples();
            set_tema('titulo', 'Alteração de mídia');
            set_tema('conteudo', load_modulo('midia', 'editar'));
            load_template();
	}
        
        public function editar_galeria(){
            $this->form_validation->set_rules('titulo', 'TITULO', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $dados = elements(array('titulo', 'descricao'), $this->input->post());
                $this->galerias->do_update($dados, array('id'=>$this->input->post('idmidia')));
            endif;
            init_tema_forms_simples();
            set_tema('titulo', 'Alteração de mídia');
            set_tema('conteudo', load_modulo('midia', 'editar-galeria'));
            load_template();
	}
        
        public function editar_video(){
            $this->form_validation->set_rules('titulo', 'NOME', 'trim|required|ucfirst');
            $this->form_validation->set_rules('descricao', 'DESCRICAO', 'trim');
            if ($this->form_validation->run()==TRUE):
                $dados = elements(array('titulo', 'descricao'), $this->input->post());
                $this->midia->do_video_update($dados, array('id'=>$this->input->post('idmidia')));
            endif;
            init_tema_forms_simples();
            set_tema('titulo', 'Alteração de mídia');
            set_tema('conteudo', load_modulo('midia', 'editar-video'));
            load_template();
	}

	public function excluir(){
            if (is_admin(TRUE)):
                $idmidia = $this->uri->segment(3);
                if ($idmidia != NULL):
                    $query = $this->midia->get_byid($idmidia);
                    if ($query->num_rows()==1):
                            $query = $query->row();
                            unlink('./assets/uploads/'.$query->arquivo);
                            $thumbs = glob('./assets/uploads/thumbs/*_'.$query->arquivo);
                            foreach ($thumbs as $arquivo):
                                    unlink($arquivo);
                            endforeach;
                            $this->midia->do_delete(array('id'=>$query->id), FALSE);
                    endif;
                else:
                    set_msg('msgerro', 'Escolha uma mídia para excluir', 'erro');
                endif;
            endif;
            redirect('midia/gerenciar');
	}
        
        public function excluir_video(){
            if (is_admin(TRUE)):
                $idmidia = $this->uri->segment(3);
                if ($idmidia != NULL):
                    $query = $this->midia->get_video_byid($idmidia);
                    if ($query->num_rows()==1):
                        $query = $query->row();
                        $this->midia->do_video_delete(array('id'=>$query->id), FALSE);
                    endif;
                else:
                    set_msg('msgerro', 'Escolha uma mídia para excluir', 'erro');
                endif;
            endif;
            redirect('midia/gerenciar_video');
	}
        
        public function excluir_galeria(){
            if (is_admin(TRUE)):
                $idmidia = $this->uri->segment(3);
                if ($idmidia != NULL):
                    $query = $this->galerias->get_byid($idmidia);
                    if ($query->num_rows()==1):
                        $query = $query->row();
                        $this->galerias->do_delete(array('id'=>$query->id), FALSE);
                    endif;
                else:
                    set_msg('msgerro', 'Escolha uma mídia para excluir', 'erro');
                endif;
            endif;
            redirect('midia/gerenciar_galeria');
	}
	
	public function get_imgs(){
            header('Content-Type: application/x-json; charset=utf-8');
            $this->db->like('nome', $this->input->post('pesquisarimg'));
            if ($this->input->post('pesquisarimg')=='') $this->db->limit(10);
            $this->db->order_by('id', 'DESC');
            $query = $this->midia->get_all();
            $retorno = 'Nenhum resultado econtrado com base em sua pesquisa';
            if ($query->num_rows()>0):
                    $retorno = '';
                    $query = $query->result();
                    foreach ($query as $linha):
                            $retorno .= '<a href="javascript:;" onclick="$(\'.htmleditor\').tinymce().execCommand(\'mceInsertContent\',false,\'<img src='.base_url("assets/uploads/$linha->arquivo").' />\');return false;">';
                            $retorno .= ''.thumb($linha->arquivo,300,180,FALSE).'</a>';
                    endforeach;
            endif;
            echo (json_encode($retorno));
	}
	
}

/* End of file midia.php */
/* Location: ./application/controllers/midia.php */