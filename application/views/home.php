<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Business Casual - Start Bootstrap Theme</title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/css/bootstrap.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/css/business-casual.css"
	rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/style.css"
	rel="stylesheet">

<!-- Fonts -->
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
	rel="stylesheet" type="text/css">
<link
	href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
	rel="stylesheet" type="text/css">

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
            <a href="./" title="Logo Mixirico"><img src="<?php echo base_url()?>assets/img/logo.png" alt="Logo Mixirico" /></a>
        </div>
		<!-- Imgens do topo -->
            
		<div class="row">
				
				<div class="col-lg-9 text-center LogoAjuste">
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
							<div class="item active">
								<img class="img-responsive img-full" src="<?php echo base_url()?>assets/img/img1.jpg" alt="">
							</div>
							<div class="item">
								<img class="img-responsive img-full" src="<?php echo base_url()?>assets/img/img2.jpg" alt="">
							</div>
							<div class="item">
								<img class="img-responsive img-full" src="<?php echo base_url()?>assets/img/img3.jpg"
									alt="">
							</div>
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
				<div class="col-lg-3 text-center agenda">
                                    <div class="bemvindos"></div>
                                    <div class="cabeca"></div>
                                    <div class="mao"></div>
					<div class="row">
						<div class="col-lg-6 text-center">
							<h3>Agenda</h3>
						</div>
						<div class="col-lg-6 text-center">
							<h5><a href="#">Ver agenda completa</a></h5>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 text-center">
							<img alt="" src="<?php echo base_url()?>assets/img/calendario.png">
						</div>
						<div class="col-lg-8 text-center">
							<h5><a href="#">Show de Humor</a></h5>
						</div>
					</div>
					
					
				</div>
			</div>
                <div class="clearfix"></div>
               
		<div class="row">
		
				<div class="col-lg-9">
                                    <div class="col-lg-12 noticia">
                                        <div class="col-lg-5">
						<img class="foto" src="<?php echo base_url()?>assets/img/mi.jpg">
						<img class="bandeira" src="<?php echo base_url()?>assets/img/bandeira.png">
					</div>
					<div class="col-lg-7">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
						placerat diam quis nisl vestibulum dignissim. In hac habitasse
						platea dictumst. Interdum et malesuada fames ac ante ipsum primis
						in faucibus. Pellentesque habitant morbi tristique senectus et
						netus et malesuada fames ac turpis egestas.</p>
					</div>
                                    </div>
				</div>
				<div class="col-lg-3 videos">
					
						<div class="col-lg-12">
							<h3>Ultimos Vídeos</h3>
						</div>
						
					
				</div>
		</div>
                <div class="clearfix"></div>
		                
                <div class="row">
                    <div class="col-lg-9">
                        <nav>
                            <ul class="pager">
                                <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Postagens Antigas</a></li>
                                <li class="next"><a href="#">Postagens Recentes <span aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>        
	</div>
  
	<!-- /.container -->
        
<!--	<footer>
		
			<div class="row">
				<div class="col-lg-12 text-center noticia">
					<p>Copyright &copy; Your Website 2014</p>
				</div>
			</div>
		
	</footer>-->

	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/app.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    </script>

</body>

</html>
