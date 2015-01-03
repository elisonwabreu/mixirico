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
		<meta name="author" content="http://hebromtech.com.br/" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		
		<title>{titulo}</title>
				
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="<?php echo base_url('template/da01/img/favicon.ico'); ?>" />
		<link rel="apple-touch-icon" href="<?php echo base_url('template/da01/img/favicon.ico'); ?>" />
		
		<!-- Insercao dos arquivos css -->
		{headerinc}
		<!--[if IE 7]>
			<link rel="stylesheet" href="template/da01/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> -->
		{headerinc2}
	</head>

	<body>
		<div class="container shadow">
			<header>
				<div class="row">
					<div class="span6 logo">
						<a href="<?php echo base_url(); ?>" title="Depósito Aracati">
							<img src="<?php echo base_url('template/da01/img/logo-deposito-aracati.png'); ?>" id="logo" alt="Depósito Aracati" title="Depósito Aracati" />	
						</a>					
					</div><!-- fim logo -->
					<div class="span6">
						<div class="row informacoes">
							<div class="span4 endereco">
								<address> <?php echo get_setting('rua'); ?> </address>
								<address> Bairro <?php echo get_setting('bairro'); ?>, <?php echo get_setting('cid_uf'); ?> </address>
								<address> CEP - <?php echo get_setting('cep'); ?> </address>
								<address> <i class="icon-phone-sign"></i> - <?php echo get_setting('telcom'); ?> / <?php echo get_setting('telcel'); ?> </address>
							</div>
							<div class="span2">
								<a href="<?php echo get_setting('twitter'); ?>" target="_blank" title="Twitter">
									<i class="icon-twitter-sign icon-5x"></i>
								</a>
								<a href="<?php echo get_setting('facebook'); ?>" target="_blank" title="Facebook">
									<i class="icon-facebook-sign icon-5x"></i>
								</a>
							</div>
						</div><!-- fim informmacoes -->
						<div class="row menu">
							<div class="span6">
								<a href="<?php echo base_url(); ?>">
									<img src="<?php echo base_url('template/da01/img/bt-home.png'); ?>" alt="Home" title="Home">
								</a>
								<a href="<?php echo base_url('sobre'); ?>" class="btn btn-inverse btn-large" title="Quem Somos">Sobre</a>
								<a href="<?php echo base_url('produtos'); ?>" class="btn btn-inverse btn-large" title="Produtos">Produtos</a>
								<a href="<?php echo base_url('faleconosco'); ?>" class="btn btn-inverse btn-large" title="Fale Conosco">Fale Conosco</a>
							</div>
						</div><!-- fim menu topo -->
					</div>
				</div>
			</header><!-- fim header -->
			<div class="row bodies">
				<div class="span3 menuVert radius-right shadow-right">
						<?php get_menuVert(); ?>
				</div><!-- Fim do menu vertical -->
				<div class="span9 conteudo">
					<div id="page" class="radius shadow">
						{conteudo}
					</div>
				</div><!-- fim conteudo -->
			</div><!-- fim bodies -->
			<footer class="footer-full radius shadow">
				<div class="row">
					<div class="span6 footer-left">
						<div class="row separador-right">
							<img src="<?php echo base_url('template/da01/img/icone.png'); ?>" class="footer-logo" width="95" height="98" alt="Depósito Aracati" title="Depósito Aracati" />
							<span class="endereco">
								<address> <?php echo get_setting('rua'); ?> </address>
								<address> Bairro <?php echo get_setting('bairro'); ?>, <?php echo get_setting('cid_uf'); ?> </address>
								<address> CEP - <?php echo get_setting('cep'); ?> </address>
								<address> <i class="icon-phone-sign"></i> - <?php echo get_setting('telcom'); ?> / <?php echo get_setting('telcel'); ?> </address>
								<address> <i class="icon-envelope-alt"></i> - <?php echo get_setting('emailcom'); ?> </address>							
							</span>
						</div>
					</div><!-- fim footer-left -->
					<div class="span6 footer-right">
						<div class="row">
							<a href="http://hebromtech.com.br/">
								<img src="<?php echo base_url('template/da01/img/logo-hebromtech.png'); ?>" class="footer-logo" width="116" height="81" alt="Depósito Aracati" title="Depósito Aracati" />
							</a>
							<span class="endereco espaco-interno">
								<address> <i class="icon-anchor"></i> - <a href="http://hebromtech.com.br/" target="blank" title="Hebrom Technology">http://www.hebromtech.com.br</a></address>
								<address> <i class="icon-phone-sign"></i> - (85) 8796.1779 / (85) 8548.7735 </address>
								<address> <i class="icon-envelope-alt"></i> - contato@hebromtech.com.br </address>							
							</span>				
						</div>
						<div class="row">
							<span class="endereco centered">
								<address>Powered by <a href="http://hebromtech.com.br/" target="blank" title="Hebrom Technology">HebromTech</a></address>				
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
	</body>
</html>