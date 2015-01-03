<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

if($this->listProdutos != null){
echo '<ul class="listaprodutos">';
foreach ($this->listProdutos as $prods) {
        echo '
                <li>
                <div class="thumbS">
                        '.thumb($prods->arquivo, 124, 124, FALSE, $prods->titulo).'
                    </div>   
                    <a href="'.base_url("site/detalhes/$prods->slug").'" class="btn btn-inverse btn-block" title="'.$prods->titulo.'">'.$prods->titulo.'</a>
                </li>
        ';
}
echo '</ul>';
echo '<div class="clearfix"></div>';
echo "<div class='pagination pagination-large pagination-centered'>" . $this->paginar . "</div>";
} else {
    echo '<div class="alert alert-error">Nenhum produto encontrado para essa categoria. Por favor volte mais tarde!</div>';
}
