<?php if (!defined("BASEPATH"))  exit("No direct script access allowed"); 
$release = get_setting('txt_home');
if($release != null){
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Release do Mixirico</h3>
  </div>
  <div class="panel-body">';
echo get_setting('txt_home');
echo '</div>';
echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Nenhum release foi cadastrado. Por favor volte mais tarde!</div>';
}