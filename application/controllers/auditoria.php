<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Auditoria extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		init_painel();
		esta_logado();
		$this->load->model('auditoria_model', 'auditoria');
	}

	public function index(){
		$this->gerenciar();
	}

	public function gerenciar(){
		set_tema('footerinc', load_js(array('icheck.min'),'assets/admin/atlant/js/plugins/icheck'), FALSE);
                set_tema('footerinc', load_js(array('jquery.mCustomScrollbar.min'),'assets/admin/atlant/js/plugins/mcustomscrollbar'), FALSE);
                set_tema('footerinc', load_js(array('jquery.dataTables.min'),'assets/admin/atlant/js/plugins/datatables'), FALSE);
                set_tema('footerinc', load_js(array('settings'),'assets/admin/atlant/js'), FALSE);
		set_tema('titulo', 'Registros de auditoria');
		set_tema('conteudo', load_modulo('auditoria', 'gerenciar'));
		load_template();
	}
	
}

/* End of file auditoria.php */
/* Location: ./application/controllers/auditoria.php */
