<?php if (!defined("BASEPATH"))  exit("No direct script access allowed"); 

if($this->listImagens != null){    
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Albuns do Mixirico</h3>
  </div>
  <div class="panel-body pageErros">';
echo '<div class="row galeriaMix">';
foreach ($this->listImagens as $galerias) {
    echo '
        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="'. thumb($galerias->arquivo, 800, 600, '', false) .'" title="'.$galerias->nome.'" rel="shadowbox[vocation]">
                <img class="img-responsive" src="'.thumb($galerias->arquivo, 320, 200, '',FALSE).'" alt="'.$galerias->nome.'" title="'.$galerias->nome.'" />
            </a>
        </div>
    ';
}
echo '</div>';
echo '</div>';
echo '</div>';
} else {
    echo '<div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Erro!</h3>
        </div>
        <div class="panel-body pageErros">';
    echo '<div class="alert alert-danger" role="alert">Nenhuma imagem foi cadastrada para essa galeria. Por favor volte mais tarde!</div>';
    echo '</div>';
    echo '</div>';
}