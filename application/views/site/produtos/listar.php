<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

if($this->listProdutos != null){
echo '<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 listaVideos">';
echo '<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">';
foreach ($this->listProdutos as $prods) {
        echo '
                <!-- Wrapper for slides -->
		<div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                            <img src="'.thumb($prods->arquivo, 350, 260, '',FALSE).'" class="img-responsive" alt="'.$prods->titulo.'" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                                <div class="price col-md-12">
                                                        <h5>'.$prods->titulo.'</h5>
                                                        <h5 class="price-text-color">R$ '.$prods->preco.'</h5>
                                                </div>
                                        </div>
                                        <div class="separator clear-left">
                                                <p class="btn-add"></p>
                                                <p class="btn-details">
                                                    <a href="'.base_url("site/detalhes/$prods->slug").'" class="hidden-sm">Detalhes</a>
                                                </p>
                                        </div>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
                </div>
                </div>
                </div>
                </div>
        ';
}

		
echo '</div>';
echo '</div>';
echo '<div class="clearfix"></div>';
echo "<div class='pagination pagination-large pagination-centered'>" . $this->paginar . "</div>";
} else {
    echo '<div class="alert alert-danger" role="alert">Nenhum produto encontrado para essa categoria. Por favor volte mais tarde!</div>';
}
