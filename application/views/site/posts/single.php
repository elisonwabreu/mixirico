<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

$slug = $this->uri->segment(3);
$query = $this->posts->get_byslug($slug)->row();
echo '<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 noticia">';
echo heading("$query->titulo", 1);
echo '
        ' . thumb($query->arquivo, 450, 450, $query->titulo) . '
        ' . to_html($query->conteudo) . '
    ';
echo '</div>';