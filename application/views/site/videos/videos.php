<?php if (!defined("BASEPATH"))  exit("No direct script access allowed"); 

if($this->listVideos != null){    
echo '<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 listaVideos">';
echo '<ul class="list-unstyled video-list-thumbs row">';
foreach ($this->listVideos as $videos) {
    if($videos->server == "YouTube"){
                $serverVid = "http://www.youtube.com/embed/";
        }elseif($videos->server == "Vimeo"){
                $serverVid = "http://player.vimeo.com/video/";
        }
    echo '
        <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="'.$serverVid.$videos->embed.'" title="'.$videos->titulo.'" rel="shadowbox;width=800;height=600">
                    <img src="'.$videos->thumb.'" alt="Barca" class="img-responsive" height="130px" />
                    <h2>'.$videos->titulo.'</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">--:--</span>
		</a>
	</li>
    ';
}
echo '</ul>';
echo '</div>';
echo '<div class="clearfix"></div>';
echo "<div class='pagination pagination-large pagination-centered'>" . $this->paginar . "</div>";
} else {
    echo '<div class="alert alert-error">Nenhum video foi cadastrado. Por favor volte mais tarde!</div>';
}