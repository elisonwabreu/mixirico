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
    </head>

    <body>
        <div class="container">
            <div class="topoH"></div>
            <!-- Imgens do topo -->
            <div class="logo">
                <a href="./" title="Logo Mixirico"><img src="<?php echo base_url(); ?>assets/theme_site/img/logo.png" alt="Logo Mixirico" /></a>
            </div>
            <!-- Imgens do topo -->
            <div class="row">

                <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9 text-center LogoAjuste">
                    <!-- Menu -->
                    <nav class="navbar navbar-default navbar-static-top menu" role="navigation">

                        <ul class="nav nav-tabs">
                            <li><a href="#">Realese</a></li>
                            <li><a href="#">Fotos</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Produtos</a></li>
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </nav>
                    <!-- Menu -->
                    <!-- Carrossel -->
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php echo get_slide_show() ?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic"
                           data-slide="prev"> <span class="icon-prev"></span>
                        </a> 
                        <a class="right carousel-control"
                           href="#carousel-example-generic" data-slide="next"> 
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!-- Carrossel -->
                </div>
                <!-- Agenda -->
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 text-center agenda">
                    <div class="bemvindos"></div>
                    <div class="cabeca"></div>
                    <div class="mao"></div>
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 text-center">
                            <h3>Agenda</h3>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 text-center">
                            <h5><a href="#">Ver agenda completa</a></h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 text-center">
                            <img alt="" src="<?php echo base_url(); ?>assets/theme_site/img/calendario.png">
                        </div>
                        <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 text-center">
                            <h5><a href="#">Show de Humor</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
                    {conteudo}
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                    <div class="boxLateral">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <h3>Ultimos Vídeos</h3>
                        </div>
                    </div>
                    <div class="boxLateral">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <h3>Ultimas Fotos</h3>
                        </div>
                    </div>
                    <div class="boxLateral">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="fb-like-box"
                                 data-href="<?php echo get_setting('facebook') ?>"
                                 data-colorscheme="light" data-show-faces="true" data-header="false"
                                 data-stream="false" data-show-border="false" data-width="220">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
                    <nav>
                        <ul class="pager">
                            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Postagens Antigas</a></li>
                            <li class="next"><a href="#">Postagens Recentes <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- footer -->
                <div class="row">
                    {rodape}
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