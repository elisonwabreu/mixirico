<?php if (!defined("BASEPATH"))  exit("No direct script access allowed"); 

if($this->listGalerias != null){    
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Albuns do Mixirico</h3>
  </div>
  <div class="panel-body">';
echo '<div class="row">';
foreach ($this->listGalerias as $galerias) {
    echo '
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="'.thumb($galerias->arquivo, 500, 300, '',FALSE).'" alt="">
              <div class="caption">
                <h4>'.$galerias->titulo.'</h4>
                <p><a href="'.base_url('site/imagens_galeria').'/'.$galerias->id.'" class="btn btn-info btn-xs" role="button">Ver Fotos</a>
            </div>
          </div>
        </div>
    ';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="clearfix"></div>';
echo "<div class='pagination-centered'>" . $this->paginar . "</div>";
} else {
    
    echo '<div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">ERRO!</h3>
        </div>
        <div class="panel-body pageErros">';
    echo '<div class="alert alert-danger" role="alert">Nenhuma galeria foi cadastrada. Por favor volte mais tarde!</div>';
    echo '</div>';
    echo '</div>'; 
}