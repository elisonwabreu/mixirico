<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

//carrega um módulo do sistema devolvendo a tela solicitada
function load_modulo($modulo = NULL, $tela = NULL, $diretorio = 'painel', $atributos = array()) {
    $CI = & get_instance();
    if ($modulo != NULL):
        return $CI->load->view("$diretorio/$modulo/$tela", $atributos, TRUE);
    else:
        return FALSE;
    endif;
}

//seta valores ao array $tema da classe sistema
function set_tema($prop, $valor, $replace = TRUE) {
    $CI = & get_instance();
    $CI->load->library('sistema');
    if ($replace):
        $CI->sistema->tema[$prop] = $valor;
    else:
        if (!isset($CI->sistema->tema[$prop]))
            $CI->sistema->tema[$prop] = '';
        $CI->sistema->tema[$prop] .= $valor;
    endif;
}

//retorna os valores do array $tema da classe sistema
function get_tema() {
    $CI = & get_instance();
    $CI->load->library('sistema');
    return $CI->sistema->tema;
}

//inicializa o painel adm carregando os recursos necessários
function init_painel() {
    $CI = & get_instance();
    $CI->load->library(array('parser', 'sistema', 'session', 'form_validation'));
    $CI->load->helper(array('form', 'url', 'array', 'text', 'html'));
    //carregamento dos models
    $CI->load->model('usuarios_model', 'usuarios');

    set_tema('titulo_padrao', 'Gerenciamento de conteúdo');
    set_tema('rodape', '
    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <!-- Copyright info -->
              <p class="copy">Copyright &copy; 2014 | <a href="http://doctypesolution.com.br/" target="_blank">Doctype Solution</a> </p>
        </div>
      </div>
    </div>
  </footer> 	    
    ');
    set_tema('template', 'painel_view');

    set_tema('headerinc', load_css(array('theme-default'),'assets/admin/atlant/css'), FALSE);
    set_tema('headerinc', load_css(array('app')), FALSE);
    set_tema('headerinc', load_js(array('jquery.min','jquery-ui.min'),'assets/admin/atlant/js/plugins/jquery'), FALSE);
    set_tema('loadJS', load_js(array('bootstrap.min'),'assets/admin/atlant/js/plugins/bootstrap'), FALSE);
    set_tema('loadJS', load_js(array('plugins', 'actions'),'assets/admin/atlant/js'), FALSE);
    set_tema('footerinc', '');
}

function init_site() {
    $CI = & get_instance();
    $CI->load->library(array('parser', 'sistema', 'session', 'form_validation', 'pagination'));
    $CI->load->helper(array('form', 'url', 'array', 'text', 'html'));
    //carregamento dos models
    $CI->load->model('usuarios_model', 'usuarios');
    $CI->load->model('settings_model', 'settings');
    $CI->load->model('produtos_model', 'produtos');
    $CI->load->model('midia_model', 'midia');
    $CI->load->model('categorias_model', 'categorias');
    //setando o tema
    $fones = ( get_setting('telcel') ) ? get_setting('telcom') .'/'. get_setting('telcel') : get_setting('telcom');
    set_tema('titulo_padrao', get_setting('nome_site'));
    set_tema('rodape', '
            <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 noticia">
                <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
                    <h3>Contatos para Shows</h3>
                    <h4>'.$fones.'</h4>
                    <h4>'.get_setting('emailcom').'</h4>

                    <a href="'.get_setting('facebook').'" target="_blank"> <img class="redeSocial" src="'. base_url() .'assets/theme_site/img/facebook.png" ></a>
                    <a href="'.get_setting('instagram').'" target="_blank"> <img class="redeSocial" src="'. base_url() .'assets/theme_site/img/instagram.png" ></a>
                    <a href="'.get_setting('twitter').'" target="_blank"> <img class="redeSocial" src="'. base_url() .'assets/theme_site/img/twitter.png" ></a>
                    <a href="'.get_setting('youtube').'" target="_blank"> <img class="redeSocial" src="'. base_url() .'assets/theme_site/img/YouTube.png" ></a>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                    <img class="sentado" src="'. base_url() .'assets/theme_site/img/sentado.png" >
                </div>
            </div>
            ');
    set_tema('template', 'site_view');


    set_tema('headerinc', load_css(array('bootstrap.min', 'business-casual'), 'assets/theme_site/css'), FALSE);
    set_tema('headerinc2', load_css(array('style'), 'assets/theme_site/css'), FALSE);
    set_tema('footerinc', load_js(array('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'), '', TRUE), FALSE);
    set_tema('footerinc2', load_js(array('bootstrap.min','npm', 'app'), 'assets/theme_site/js'), FALSE);
}

//inicializa o tinymce para criação de textarea com editor html
function init_htmleditor() {
    set_tema('footerinc', load_js(base_url('htmleditor/jquery.tinymce.js'), NULL, TRUE), FALSE);
    set_tema('footerinc', incluir_arquivo('htmleditor', 'includes', FALSE), FALSE);
}

//retorna ou printa o conteúdo de uma view
function incluir_arquivo($view, $pasta = 'includes', $echo = TRUE) {
    $CI = & get_instance();
    if ($echo == TRUE):
        echo $CI->load->view("$pasta/$view", '', TRUE);
        return TRUE;
    endif;
    return $CI->load->view("$pasta/$view", '', TRUE);
}

//carrega um template passando o array $tema como parâmetro
function load_template() {
    $CI = & get_instance();
    $CI->load->library('sistema');
    $CI->parser->parse($CI->sistema->tema['template'], get_tema());
}

//carrega um ou vários arquivos .css de uma pasta
function load_css($arquivo = NULL, $pasta = 'css', $media = 'all') {
    if ($arquivo != NULL):
        $CI = & get_instance();
        $CI->load->helper('url');
        $retorno = '';
        if (is_array($arquivo)):
            foreach ($arquivo as $css):
                $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$css.css") . '" media="' . $media . '" />';
            endforeach;
        else:
            $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$arquivo.css") . '" media="' . $media . '" />';
        endif;
    endif;
    return $retorno;
}

//carrega um ou vários arquivos .js de uma pasta ou servidor remoto
function load_js($arquivo = NULL, $pasta = 'js', $remoto = FALSE) {
    if ($arquivo != NULL):
        $CI = & get_instance();
        $CI->load->helper('url');
        $retorno = '';
        if (is_array($arquivo)):
            foreach ($arquivo as $js):
                if ($remoto):
                    $retorno .= '<script type="text/javascript" src="' . $js . '"></script>';
                else:
                    $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$js.js") . '"></script>';
                endif;
            endforeach;
        else:
            if ($remoto):
                $retorno .= '<script type="text/javascript" src="' . $arquivo . '"></script>';
            else:
                $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$arquivo.js") . '"></script>';
            endif;
        endif;
    endif;
    return $retorno;
}

//mostra erros de validação em forms
function erros_validacao() {
    if (validation_errors())
        echo '<div class="alert alert-danger" role="alert">' . validation_errors('<p>', '</p>') . '</div>';
}

//verifica se o usuário está logado no sistema
function esta_logado($redir = TRUE) {
    $CI = & get_instance();
    $CI->load->library('session');
    $user_status = $CI->session->userdata('user_logado');
    if (!isset($user_status) || $user_status != TRUE):
        $CI->session->sess_destroy();
        if ($redir):
            $CI->session->set_userdata(array('redir_para' => current_url()));
            set_msg('errologin', 'Acesso restrito, faça login antes de prosseguir', 'erro');
            redirect('usuarios/login');
        else:
            return FALSE;
        endif;
    else:
        return TRUE;
    endif;
}

//define uma mensagem para ser exibida na próxima tela carregada
function set_msg($id = 'msgerro', $msg = NULL, $tipo = 'erro') {
    $CI = & get_instance();
    switch ($tipo):
        case 'erro':
            $CI->session->set_flashdata($id, '<div class="alert alert-danger" role="alert"><p>' . $msg . '</p></div>');
            break;
        case 'sucesso':
            $CI->session->set_flashdata($id, '<div class="alert alert-success" role="alert"><p>' . $msg . '</p></div>');
            break;
        default:
            $CI->session->set_flashdata($id, '<div class="alert alert-info" role="alert"><p>' . $msg . '</p></div>');
            break;
    endswitch;
}

//verifica se existe uma mensagem para ser exibida na tela atual
function get_msg($id, $printar = TRUE) {
    $CI = & get_instance();
    if ($CI->session->flashdata($id)):
        if ($printar):
            echo $CI->session->flashdata($id);
            return TRUE;
        else:
            return $CI->session->flashdata($id);
        endif;
    endif;
    return FALSE;
}

//verifica se o usuário atual é administrador
function is_admin($set_msg = FALSE) {
    $CI = & get_instance();
    $user_admin = $CI->session->userdata('user_admin');
    if (!isset($user_admin) || $user_admin != TRUE):
        if ($set_msg)
            set_msg('msgerro', 'Seu usuário não tem permissão para executar esta operação', 'erro');
        return FALSE;
    else:
        return TRUE;
    endif;
}

//gera um breadcrumb com base no controller atual
function breadcrumb() {
    $CI = & get_instance();
    $CI->load->helper('url');
    $classe = ucfirst($CI->router->class);
    if ($classe == 'Scwpanel'):
        $classe = anchor($CI->router->class, 'Início');
    else:
        $classe = anchor($CI->router->class, $classe);
    endif;
    $metodo = ucwords(str_replace('_', ' ', $CI->router->method));
    if ($metodo && $metodo != 'Index'):
        $metodo = '<li>' . anchor($CI->router->class . "/" . $CI->router->method, $metodo).'</li>';
    else:
        $metodo = '';
    endif;
    return '<li>'.anchor('scwpanel', '<i class="fa fa-home"></i>') . '  ' . $classe . $metodo.'</li>';
}

function getTitulo() {
    $CI = & get_instance();
    $CI->load->helper('url');
    $classe = ucfirst($CI->router->class);
    if ($classe == 'Scwpanel'):
        $classe = 'Início';
    else:
        $classe = $classe;
    endif;
    $metodo = ucwords(str_replace('_', ' ', $CI->router->method));
    if ($metodo && $metodo != 'Index'):
        $metodo = $metodo;
    else:
        $metodo = '';
    endif;
    return $metodo . ' ' . $classe;
}

//seta um registro na tabela de auditoria
function auditoria($operacao, $obs = '', $query = TRUE) {
    $CI = & get_instance();
    $CI->load->library('session');
    $CI->load->model('auditoria_model', 'auditoria');
    if ($query):
        $last_query = $CI->db->last_query();
    else:
        $last_query = '';
    endif;
    if (esta_logado(FALSE)):
        $user_id = $CI->session->userdata('user_id');
        $user_login = $CI->usuarios->get_byid($user_id)->row()->login;
    else:
        $user_login = 'Desconhecido';
    endif;
    $dados = array(
        'usuario' => $user_login,
        'operacao' => $operacao,
        'query' => $last_query,
        'observacao' => $obs,
    );
    $CI->auditoria->do_insert($dados);
}

//gera uma miniatura de uma imagem caso ela ainda não exista
function thumb($imagem = NULL, $largura = 100, $altura = 75, $titulo = NULL, $geratag = TRUE) {
    $CI = & get_instance();
    $CI->load->helper('file');
    $thumb = $largura . 'x' . $altura . '_' . $imagem;
    $thumbinfo = get_file_info('assets/uploads/thumbs/' . $thumb);
    if ($thumbinfo != FALSE):
        $retorno = base_url('assets/uploads/thumbs/' . $thumb);
    else:
        $CI->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/uploads/' . $imagem;
        $config['new_image'] = 'assets/uploads/thumbs/' . $thumb;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $largura;
        $config['height'] = $altura;
        $CI->image_lib->initialize($config);
        if ($CI->image_lib->resize()):
            $CI->image_lib->clear();
            $retorno = base_url('assets/uploads/thumbs/' . $thumb);
        else:
            $retorno = FALSE;
        endif;
    endif;
    if ($geratag && $retorno != FALSE)
        $retorno = '<img src="' . $retorno . '" alt="' . $imagem . '" title="' . $titulo . '" />';
    return $retorno;
}
function thumb_banner($imagem = NULL, $largura = 100, $altura = 75, $titulo = NULL, $id = NULL, $geratag = TRUE) {
    $CI = & get_instance();
    $CI->load->helper('file');
    $thumb = $largura . 'x' . $altura . '_' . $imagem;
    $thumbinfo = get_file_info('assets/uploads/thumbs/' . $thumb);
    if ($thumbinfo != FALSE):
        $retorno = base_url('assets/uploads/thumbs/' . $thumb);
    else:
        $CI->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/uploads/' . $imagem;
        $config['new_image'] = 'assets/uploads/thumbs/' . $thumb;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $largura;
        $config['height'] = $altura;
        $CI->image_lib->initialize($config);
        if ($CI->image_lib->resize()):
            $CI->image_lib->clear();
            $retorno = base_url('assets/uploads/thumbs/' . $thumb);
        else:
            $retorno = FALSE;
        endif;
    endif;
    if ($geratag && $retorno != FALSE)
        $retorno = '<img src="' . $retorno . '" alt="' . $imagem . '" title="' . $titulo . '" ' . $id . ' />';
    return $retorno;
}
function thumb_bullet($imagem = NULL, $largura = 100, $altura = 75, $titulo = NULL, $proporcional = TRUE, $geratag = TRUE) {
    $CI = & get_instance();
    $CI->load->helper('file');
    $thumb = $largura . 'x' . $altura . '_' . $imagem;
    $thumbinfo = get_file_info('assets/uploads/thumbs/' . $thumb);
    if ($thumbinfo != FALSE):
        $retorno = base_url('assets/uploads/thumbs/' . $thumb);
    else:
        $CI->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/uploads/' . $imagem;
        $config['new_image'] = 'assets/uploads/thumbs/' . $thumb;
        $config['maintain_ratio'] = $proporcional;
        $config['width'] = $largura;
        $config['height'] = $altura;
        $CI->image_lib->initialize($config);
        if ($CI->image_lib->resize()):
            $CI->image_lib->clear();
            $retorno = base_url('assets/uploads/thumbs/' . $thumb);
        else:
            $retorno = FALSE;
        endif;
    endif;
    if ($geratag && $retorno != FALSE)
        $retorno = '<img src="' . $retorno . '" alt="' . $imagem . '" title="' . $titulo . '" />';
    return $retorno;
}

//gera um slug basedo no título
function slug($string = NULL) {
    $string = remove_acentos($string);
    return url_title($string, '-', TRUE);
}

//remove acentos e caracteres especiais de uma string
function remove_acentos($string = NULL) {
    $procurar = array('À', 'Á', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Õ', 'Ô', 'Ú', 'Ü', 'Ç', 'à', 'á', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'õ', 'ô', 'ú', 'ü', 'ç');
    $substituir = array('A', 'A', 'A', 'A', 'E', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'C', 'a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c');
    return str_replace($procurar, $substituir, $string);
}

//gera o resumo de uma string
function resumo_post($string = NULL, $palavras = 50, $decodifica_html = TRUE, $remove_tags = TRUE) {
    if ($string != NULL):
        if ($decodifica_html)
            $string = to_html($string);
        if ($remove_tags)
            $string = strip_tags($string);
        $retorno = word_limiter($string, $palavras);
    else:
        $retorno = FALSE;
    endif;
    return $retorno;
}

//converter dados do bd para html válido
function to_html($string = NULL) {
    return html_entity_decode($string);
}

//salva ou atualiza uma config no bd
function set_setting($nome, $valor = '') {
    $CI = & get_instance();
    $CI->load->model('settings_model', 'settings');
    if ($CI->settings->get_bynome($nome)->num_rows() == 1):
        if (trim($valor) == ''):
            $CI->settings->do_delete(array('nome_config' => $nome), FALSE);
        else:
            $dados = array(
                'nome_config' => $nome,
                'valor_config' => $valor
            );
            $CI->settings->do_update($dados, array('nome_config' => $nome), FALSE);
        endif;
    else:
        $dados = array(
            'nome_config' => $nome,
            'valor_config' => $valor
        );
        $CI->settings->do_insert($dados, FALSE);
    endif;
}

//retorna uma config do bd
function get_setting($nome) {
    $CI = & get_instance();
    $CI->load->model('settings_model', 'settings');
    $setting = $CI->settings->get_bynome($nome);
    if ($setting->num_rows() == 1):
        $setting = $setting->row();
        return $setting->valor_config;
    else:
        return NULL;
    endif;
}

//retorna o menu vertical pegando as informacoes baseada na tabela de categorias
function get_menuVert() {
    $CI = & get_instance();
    $CI->load->model('categorias_model', 'categorias');
    $CI->load->model('produtos_model', 'produtos');
    $categorias = $CI->categorias->get_all()->result();
    $produtos = $CI->produtos->get_all()->result();
    $i = 0;
    if ($categorias != null && $produtos != null):
        echo '<ul class="nav nav-list">';
        echo '<li class="nav-header">Produtos Diversos</li>';
        foreach ($categorias as $cat) {
            $i++;
            echo '
                <li class="dropdown">
                <a class="dropdown-toggle" id="drop' . $i . '" role="button" data-toggle="dropdown" href="#"><i class="icon-caret-right"></i> ' . $cat->nome . '</a>
                <ul id="menu' . $i . '" class="dropdown-menu" role="menu" aria-labelledby="drop' . $i . '">
                ';
            foreach ($produtos as $prod) {
                if ($prod->cat_prod == $cat->id) {
                    echo '<li><a tabindex="-1" href="' . base_url("produtos/detalhes/$prod->slug") . '">' . $prod->titulo . '</a></li>';
                }
            }
            echo '
			         </ul>
	         	 </li>
	        ';
        }
        echo '</ul>';
    else:
        return NULL;
    endif;
}

//retorna o menu horizontal pegando as informacoes baseada na tabela de categorias
function get_menuHori() {
    $CI = & get_instance();
    $CI->load->model('categorias_model', 'categorias');
    $CI->load->model('produtos_model', 'produtos');
    $categorias = $CI->categorias->get_all()->result();
    $categ_pai = $CI->categorias->get_pai()->result();
    $i = 0;
    if ($categorias != null):
        echo '<ul class="nav" role="navigation">';
        foreach ($categ_pai as $cat) {
            $i++;
            echo '
                <li class="dropdown">
                <a id="drop' . $i . '" href="' . base_url("site/categoria/$cat->id") . ' " role="button" class="dropdown-toggle" data-toggle="dropdown">' . $cat->nome . ' <b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-menuu" role="menu" aria-labelledby="drop' . $i . '">
            ';
            foreach ($categorias as $cate) {
                if ($cate->cat_pai_id == $cat->id) {
                    echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="' . base_url("site/categoria/$cate->id") . '">' . $cate->nome . '</a></li>';
                }
            }
            echo '
                    </ul>
            </li>
           ';
        }
        echo '</ul>';
    else:
        return NULL;
    endif;
}
//retorna o menu horizontal pegando as informacoes baseada na tabela de categorias
function get_slide_show() {
    $CI = & get_instance();
    $CI->load->model('midia_model', 'midia');
    $banner = $CI->midia->get_banner()->result();
    $i = 0;
    if ($banner != null):
        
                foreach ($banner as $banners) {
                    $i++;
                    $active = ( $i == 1) ? 'active' : '';
                    echo '<div class="item '.$active.'">';
                    echo thumb_banner($banners->arquivo, 843, 403, $banners->descricao, 'class="img-responsive img-full"');
                    echo '</div>';
                }
            
            /*
            echo '<div class="ws_bullets">';
                echo '<div>';
                foreach ($banner as $banners) {
                echo '<a href="#" title="">'.  thumb_bullet($banners->arquivo, 112, 48, $banners->nome, FALSE).' '.$i.'</a>';
                }
                echo '</div>';
            echo '</div>';
            */
    else:
        return NULL;
    endif;
}
//
function formata_CEP($numero) {
    $numero = preg_replace("[' '-./ t]", '', $numero);
    $valor = str_pad(preg_replace('[^0-9]', '', $numero), 7, '0', STR_PAD_LEFT);
    return preg_replace('/^(\d{2})(\d{3})(\d{3})$/', '$1.$2-$3', $valor);
}

function formata_TEL($numero) {
    $numero = preg_replace("[' '-./ t]", '', $numero);
    $valor = str_pad(preg_replace('[^0-9]', '', $numero), 10, '0', STR_PAD_LEFT);
    return preg_replace('/^(\d{2})(\d{4})(\d{4})$/', '($1) $2-$3', $valor);
}