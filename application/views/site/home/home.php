<?php if (!defined("BASEPATH"))  exit("No direct script access allowed"); 

if($this->listPosts != null){

foreach ($this->listPosts as $posts) {
    $data = date('d/M', strtotime($posts->dataCreate));
    $data = explode('/', $data);
    echo '
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 noticia">
        <div class="col-md-5 col-xs-5 col-sm-5 col-lg-5">
            '.thumb_banner($posts->arquivo, 124, 124, $posts->titulo,'class="foto"').'
            <span class="bandeira"><em class="numero">'.$data[0].'</em><hr class="dividiBandeira"/>'.$data[1].'</span>
        </div>

        <div class="col-md-7 col-xs-7 col-sm-7 col-lg-7">
            <p class="titulo">'. ucwords($posts->titulo). '</p>
            <p>'.resumo_post($posts->conteudo, 45).'</p>
            <a href="'.base_url("site/post/$posts->slug").'" title="'.$posts->titulo.'">Clique para ler a notícia completa</a>
        </div>
        </div>
    ';
}

echo '<div class="clearfix"></div>';
echo '<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <nav>
            '. $this->paginar .'
        </nav>
    </div>
</div>';
} else {
    echo '<div class="alert alert-error">Nenhuma postagem foi cadastrada. Por favor volte mais tarde!</div>';
}