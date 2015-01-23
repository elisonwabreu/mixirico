<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

if($this->listShows != null){
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Shows do Mixirico</h3>
  </div>
  <div class="panel-body pageErros">';
echo '<div>';
foreach ($this->listShows as $prods) {
        echo '
            <!-- Wrapper for slides -->
            <div class="col-sm-3">
                <div class="col-item">
                    <div class="photo">
                        <img src="'.thumb($prods->banner, 350, 260, '',FALSE).'" class="img-responsive" alt="'.$prods->titulo.'" />
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                    <h5>'.$prods->titulo.'</h5>
                                    <h5 class="price-text-color">'.$prods->data.'</h5>
                            </div>
                        </div>
                        <div class="separator clear-left">
                            <p class="btn-details pull-right">
                                <a href="'.base_url("site/detalhes_agenda/$prods->id").'" class="hidden-sm">Detalhes</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
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
    echo '<div class="alert alert-danger" role="alert">Nenhum produto encontrado para essa categoria. Por favor volte mais tarde!</div>';
    echo '</div>';
    echo '</div>';
}
