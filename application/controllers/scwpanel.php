<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Scwpanel extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		$this->load->model('auditoria_model', 'auditoria');
	}

	public function index(){
		$this->inicio();
	}
	
	public function inicio(){
		if (esta_logado(FALSE)):
			set_tema('footerinc', load_js(array('icheck.min'),'assets/admin/atlant/js/plugins/icheck'), FALSE);
			set_tema('footerinc', load_js(array('jquery.mCustomScrollbar.min'),'assets/admin/atlant/js/plugins/mcustomscrollbar'), FALSE);
                        set_tema('footerinc', load_js(array('jquery.dataTables.min'),'assets/admin/atlant/js/plugins/datatables'), FALSE);
                        set_tema('footerinc', incluir_arquivo('settings', 'includes', FALSE), FALSE);
			set_tema('titulo', 'SCWPANEL - Sistema de Controle de Website');
			set_tema('conteudo', load_modulo('auditoria', 'gerenciar'));
			load_template();
		else:
			redirect('usuarios/login');
		endif;
	}
	
}

/* End of file painel.php */
/* Location: ./application/controllers/scwpanel.php */