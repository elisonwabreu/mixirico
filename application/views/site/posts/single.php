<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

$slug  = $this->uri->segment(3);
$query = $this->posts->get_byslug($slug)->row();
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">'.$query->titulo.'</h3>
  </div>
  <div class="panel-body">';
echo '
    ' . thumb($query->arquivo, 450, 450, $query->titulo) . '
    ' . to_html($query->conteudo) . '
    ';
echo '</div>';
echo '</div>';