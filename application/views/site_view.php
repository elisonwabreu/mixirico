<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8" />
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="description" content="{description}" />
        <meta name="keywords" content="{keywords}" />
        <meta name="author" content="http://doctypesolution.com.br/" />
        <meta name="designer" content="Lincoln00" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />
        <title><?php if (isset($titulo)): ?>{titulo} | <?php endif; ?>{titulo_padrao}</title>
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/theme_site/img/favicon.ico'); ?>" />
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/theme_site/img/favicon.ico'); ?>" />
        <!-- Insercao dos arquivos css -->
        {headerinc}
        <!--[if IE 7]>
                <link rel="stylesheet" href="assets/theme_site/da01/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> -->
        {headerinc2}
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(44.5403, -78.5463),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>
        <div class="container">
            <div class="topoH"></div>
            <!-- Imgens do topo -->
            <div class="logo">
                <a href="<?php echo base_url(); ?>" title="Logo Mixirico"><img src="<?php echo base_url(); ?>assets/theme_site/img/logo.png" alt="Logo Mixirico" /></a>
            </div>
            <!-- Imgens do topo -->
            <div class="row">
                <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 text-center LogoAjuste">
                    <!-- Menu -->
                    <nav class="navbar navbar-default navbar-static-top menu" role="navigation">
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo base_url('site/release'); ?>">Realese</a></li>
                            <li><a href="<?php echo base_url('site/galerias'); ?>">Fotos</a></li>
                            <li><a href="<?php echo base_url('site/videos'); ?>">Videos</a></li>
                            <li><a href="<?php echo base_url('site/produtos'); ?>">Produtos</a></li>
                            <li><a href="<?php echo base_url('site/agenda'); ?>">Agenda</a></li>
                            <li><a href="<?php echo base_url('site/faleconosco'); ?>">Contato</a></li>
                        </ul>
                    </nav>
                    <!-- Menu -->
                    <?php if ($this->uri->segment(1) == NULL): ?>
                    <!-- Carrossel -->
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php echo get_slide_show() ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a> 
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!-- Carrossel -->   
                <?php endif;?>
                    </div>
                <!-- Agenda -->
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 text-center agenda pull-right">
                    <div class="bemvindos"></div>
                    <div class="cabeca"></div>
                    <div class="mao"></div>
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 text-center">
                            <h4><i class="fa fa-calendar-o"></i> Agenda</h4>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 text-center">
                            <h5><a href="#">Ver agenda completa</a></h5>
                        </div>
                    </div>
                    <div class="row">
                        <?php get_agendas(); ?>
                    </div>
                </div>
                
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <?php $sobeTopo = ( $this->uri->segment(1) != NULL ) ? ' sobeTopo':'';?>
                <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9<?php echo $sobeTopo; ?>">
                    {conteudo}
                </div>                
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 boxLateral">
                            <h4><i class="fa fa-video-camera"></i> Ultimos Vídeos</h4>
                            <?php get_videos_desc(); ?>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 boxLateral">
                            <h4><i class="fa fa-picture-o"></i> Ultimas Fotos</h4>
                            <?php get_imagem_desc(); ?>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 boxLateral">
                        <div class="fb-like-box"
                             data-href="<?php echo get_setting('facebook') ?>"
                             data-colorscheme="light" data-show-faces="true" data-header="false"
                             data-stream="false" data-show-border="false" data-width="220">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div class="row">
                {rodape}                
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center boxLateral">
                        <a href="http://doctypesolution.com.br/" target="_blank" >
                            <img src="<?php echo base_url('assets/theme_site/img/logo-dts.png'); ?>" class="footer-logo" width="116" height="81" alt="Doctype" title="Doctype" />
                        </a>
                        <span class="endereco espaco-interno">
                            <address> <i class="fa fa-laptop"></i> - <a href="http://doctypesolution.com.br/" target="_blank" title="Doctype Solution">http://doctypesolution.com.br</a></address>
                            <address> <i class="fa fa-phone"></i> - (85) 8796.1779 / (85) 8548.7735 </address>
                            <address> <i class="fa fa-envelope"></i> - contato@doctypesolution.com.br</address>       
                            <address>Powered by <a href="http://doctypesolution.com.br/" target="_blank" title="Doctype Solution">DocType Solution</a></address>    
                        </span>    
                    </div>                      
                </div>
            </div>           
        </div>
        <!-- /.container -->
        <!-- jQuery -->
        <!-- Insercao dos arquivos js -->
        {footerinc}
        {footerinc2}
        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script>    
    </body>
</html>