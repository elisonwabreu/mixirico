<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

$slug = $this->uri->segment(3);
$query = $this->produtos->get_byslug($slug)->row();
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">'.$query->titulo.'</h3>
  </div>
  <div class="panel-body">';
echo '<div class="detprodutos">';
$preco = number_format($query->preco, 2, ',', 2);
echo '
        ' . thumb($query->arquivo, 450, 450, $query->titulo) . '
        ' . to_html($query->conteudo) . '
    ';
echo '</div>';
echo '<a href="' . base_url('site/faleconosco') . '" class="btn btn-inverse btn-large btn-block" title="Fale Conosco">Fale Conosco</a>';
echo '</div>';
echo '</div>';