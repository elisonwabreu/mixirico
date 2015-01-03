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

        <title>{titulo}</title>

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/theme_site/da01/img/favicon.ico'); ?>" />
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/theme_site/da01/img/favicon.ico'); ?>" />

        <!-- Insercao dos arquivos css -->
        {headerinc}
        <!--[if IE 7]>
                <link rel="stylesheet" href="assets/theme_site/da01/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> -->
        {headerinc2}
        
    </head>
    <body>
        <div class="container-fluid container-fluidd">
            <div id="header">
                <div class="row-fluid">
                    <div class="span4 logo">
                        <div class="centered">
                            <a href="<?php echo base_url(); ?>" title="Estampas & Bordados">
                                <img src="<?php echo get_setting('url_logomarca'); ?>" id="logo" alt="Estampas & Bordados" title="Estampas & Bordados" />	
                            </a>					
                        </div><!-- fim logo -->
                    </div>
                    <div class="span8">
                        <div class="row-fluid informacoes">
                            <div class="span8 endereco">
                                <address> <?php echo get_setting('rua'); ?> Bairro <?php echo get_setting('bairro'); ?>, <?php echo get_setting('cid_uf'); ?> CEP - <?php echo get_setting('cep'); ?></address>
                                <address> <i class="icon-phone-sign"></i> - <?php echo get_setting('telcom'); ?> <?php if (get_setting('telcel')) {
    echo '/';
} ?> <?php echo get_setting('telcel'); ?> </address>
                                <address> <i class="icon-skype"></i> - <?php echo get_setting('skype'); ?></address>
                            </div>
                            <div class="span4">
                                <a class="twitter" href="<?php echo get_setting('twitter'); ?>" target="_blank" title="Twitter">
                                    <i class="icon-twitter-sign icon-5x"></i>
                                </a>
                                <a class="facebook" href="<?php echo get_setting('facebook'); ?>" target="_blank" title="Facebook">
                                    <i class="icon-facebook-sign icon-5x"></i>
                                </a>
                            </div>
                        </div><!-- fim informmacoes -->   
                        <div class="row-fluid menu">
                            <div class="span12">
                                <div class="centered">
                                    <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-large" title="Pagina Inicial">Inicio</a>
                                    <a href="<?php echo base_url('site/sobre'); ?>" class="btn btn-danger btn-large" title="Quem Somos">Sobre</a>
                                    <a href="<?php echo base_url('site/faleconosco'); ?>" class="btn btn-danger btn-large" title="Fale Conosco">Fale Conosco</a>
                                </div>
                            </div>
                        </div><!-- fim menu topo -->
                    </div>
                </div>
            </div><!-- fim header -->
            <div class="navbar navbar-info">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
                        <a class="brand" href="<?php echo base_url('site/produtos'); ?>">Nossos Produtos</a>
                        <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
                        <div class="nav-collapse collapse">                    
                        <?php get_menuHori(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container containerr radius">
            <div class="row bodies">
                <div class="span12 conteudo">
                    <?php
                        if (!$this->uri->segment(1)):
                    ?>
                    <div class="well-middle">
                        <?php get_slide_show(); ?>
                    </div>
                    <?php
                       endif; 
                    ?>
                    <div id="page" class="radius shadow">	
                        {conteudo}
                    </div>
                </div><!-- fim conteudo -->
            </div><!-- fim bodies -->
            <footer class="footer-full radius shadow">
                <div class="row">
                    <div class="span6 footer-left">         
                        <div class="separador-right">
                            <img src="<?php echo base_url('assets/theme_site/da01/img/icone.png'); ?>" class="footer-logo" width="95" height="98" alt="Estampas & Bordados" title="Estampas & Bordados" />
                            <span class="endereco">
                                <address> <?php echo get_setting('rua'); ?> </address>
                                <address> Bairro <?php echo get_setting('bairro'); ?>, <?php echo get_setting('cid_uf'); ?> </address>
                                <address> CEP - <?php echo get_setting('cep'); ?> </address>
                                <address> <i class="icon-phone-sign"></i> - <?php echo get_setting('telcom'); ?> <?php if (get_setting('telcel')) {
                                    echo '/';
                                } ?> <?php echo get_setting('telcel'); ?> </address>
                                <address> <i class="icon-skype"></i></i> - <?php echo get_setting('skype'); ?> </address>
                                <address> <i class="icon-envelope-alt"></i> - <?php echo get_setting('emailcom'); ?> </address>							
                            </span>
                        </div>
                    </div><!-- fim footer-left -->
                    <div class="visible-phone"><hr/></div>
                    <div class="span6 footer-right">
                        <div class="row">
                            <a href="http://doctypesolution.com.br/" target="blank" >
                                <img src="<?php echo base_url('assets/theme_site/da01/img/logo-dts.png'); ?>" class="footer-logo" width="116" height="81" alt="DepÃ³sito Aracati" title="DepÃ³sito Aracati" />
                            </a>
                            <span class="endereco espaco-interno">
                                <address> <i class="icon-anchor"></i> - <a href="http://doctypesolution.com.br/" target="blank" title="Hebrom Technology">http://doctypesolution.com.br</a></address>
                                <address> <i class="icon-phone-sign"></i> - (85) 8796.1779 / (85) 8548.7735 </address>
                                <address> <i class="icon-envelope-alt"></i> - contato@doctypesolution.com.br</address>							
                            </span>				
                        </div>
                        <div class="row">
                            <span class="endereco centered">
                                <address>Powered by <a href="http://doctypesolution.com.br/" target="blank" title="Hebrom Technology">DocType Solution</a></address>				
                            </span>	
                        </div>
                    </div><!-- fim footer-right -->
                </div>
            </footer><!-- fim footer -->
            <div class="row">
                <div class="span10 marron2 offset1 radius shadow">
                    <span class="endereco centered">
                        {rodape}					
                    </span>	
                </div>
            </div>			
        </div>
        <!-- Insercao dos arquivos js -->
        {footerinc}
        {footerinc2}
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/slide/engine1/wowslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/slide/engine1/script.js"></script>
    </body>
</html>