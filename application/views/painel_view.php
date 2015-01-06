<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($titulo)): ?>{titulo} | <?php endif; ?>{titulo_padrao}</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url('assets/admin/atlant/favicon.ico'); ?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        {headerinc}
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php if(esta_logado(FALSE)): ?>
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('scwpanel'); ?>">SCWPANEL</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>   
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url('assets/admin/atlant/images/users/no-image.jpg'); ?>" alt="<?php echo $this->session->userdata('user_nome'); ?>"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url('assets/admin/atlant/images/users/no-image.jpg'); ?>" alt="<?php echo $this->session->userdata('user_nome'); ?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $this->session->userdata('user_nome'); ?></div>
                                <!-- <div class="profile-data-title">Web Developer/Designer</div> -->
                            </div>
                            <div class="profile-controls">
                                <!--
                                <a href="<?php //echo base_url('profile'); ?>" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="<?php //echo base_url('messages'); ?>" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                                -->
                            </div>
                        </div>                                                                        
                    </li>
                    <?php $segimento = $this->uri->segment(1).'/'.$this->uri->segment(2);?>
                    <li class="xn-title">Menu</li>
                    <li<?php echo ($this->uri->segment(2) == null ) ? ' class="active"' : '' ;?>>
                        <a href="<?php echo base_url('scwpanel'); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>
                    </li>  
                    <li class="xn-openable<?php echo ($segimento == 'posts/categorias' || $segimento == 'posts/cadastrar' || $segimento == 'posts/gerenciar' ) ? ' active' : '' ;?>">
                        <a href="#"><span class="fa fa-file-text"></span> <span class="xn-text">Posts</span></a>
                        <ul>
                            <li<?php echo ($segimento == 'posts/categorias') ? ' class="active"' : '' ;?>><?php echo anchor('posts/categorias', '<span class="fa fa-clipboard"></span> Categorias'); ?></li>
                            <li<?php echo ($segimento == 'posts/cadastrar') ? ' class="active"' : '' ;?>><?php echo anchor('posts/cadastrar', '<span class="fa fa-plus-square"></span> Cadastrar'); ?></a></li>
                            <li<?php echo ($segimento == 'posts/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('posts/gerenciar', '<span class="fa fa-table"></span> Gerenciar'); ?></a></li>                        
                        </ul>
                    </li>
                    <li class="xn-openable<?php echo ($segimento == 'paginas/categorias' || $segimento == 'paginas/cadastrar' || $segimento == 'paginas/gerenciar' ) ? ' active' : '' ;?>">
                        <a href="#"><span class="fa fa-file-text"></span> <span class="xn-text">Paginas</span></a>
                        <ul>
                            <li<?php echo ($segimento == 'paginas/categorias' ) ? ' class="active"' : '' ;?>><?php echo anchor('paginas/categorias', '<span class="fa fa-clipboard"></span> Categorias'); ?></li>
                            <li<?php echo ($segimento == 'paginas/cadastrar' ) ? ' class="active"' : '' ;?>><?php echo anchor('paginas/cadastrar', '<span class="fa fa-plus-square"></span> Cadastrar'); ?></a></li>
                            <li<?php echo ($segimento == 'paginas/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('paginas/gerenciar', '<span class="fa fa-table"></span> Gerenciar'); ?></a></li>                        
                        </ul>
                    </li>     
                    <li class="xn-openable<?php echo ($segimento == 'midia/cadastrar' || $segimento == 'midia/gerenciar' ) ? ' active' : '' ;?>">
                        <a href="#"><span class="fa fa-picture-o"></span> <span class="xn-text">Midias</span></a>
                        <ul>
                            <li<?php echo ($segimento == 'midia/cadastrar' ) ? ' class="active"' : '' ;?>><?php echo anchor('midia/cadastrar', '<span class="fa fa-plus-square"></span> Cadastrar'); ?></a></li>
                            <li<?php echo ($segimento == 'midia/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('midia/gerenciar', '<span class="fa fa-table"></span> Gerenciar'); ?></a></li>                       
                        </ul>
                    </li> 
                    <li class="xn-openable<?php echo ($segimento == 'categorias/gerenciar' || $segimento == 'produtos/cadastrar' || $segimento == 'produtos/gerenciar' ) ? ' active' : '' ;?>">
                        <a href="#"><span class="fa fa-money"></span> <span class="xn-text">Produtos</span></a>
                        <ul>
                            <li<?php echo ($segimento == 'categorias/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('categorias/gerenciar', '<span class="fa fa-clipboard"></span> Categorias'); ?></li>
                            <li<?php echo ($segimento == 'produtos/cadastrar' ) ? ' class="active"' : '' ;?>><?php echo anchor('produtos/cadastrar', '<span class="fa fa-plus-square"></span> Cadastrar'); ?></a></li>
                            <li<?php echo ($segimento == 'produtos/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('produtos/gerenciar', '<span class="fa fa-table"></span> Gerenciar'); ?></a></li>                        
                        </ul>
                    </li>
                    <li class="xn-openable<?php echo ($segimento == 'usuarios/cadastrar' || $segimento == 'usuarios/gerenciar' ) ? ' active' : '' ;?>">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Usuários</span></a>
                        <ul>
                            <li<?php echo ($segimento == 'usuarios/cadastrar' ) ? ' class="active"' : '' ;?>><?php echo anchor('usuarios/cadastrar', '<span class="fa fa-plus-square"></span> Cadastrar'); ?></a></li>
                            <li<?php echo ($segimento == 'usuarios/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('usuarios/gerenciar', '<span class="fa fa-table"></span> Gerenciar'); ?></a></li>                        
                        </ul>
                    </li>
                    <li class="xn-openable<?php echo ($segimento == 'auditoria/gerenciar' || $segimento == 'settings/gerenciar' ) ? ' active' : '' ;?>">
                        <a href="#"><span class="fa fa-tablet"></span> <span class="xn-text"> Administração</span></a>
                        <ul>
                            <li<?php echo ($segimento == 'auditoria/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('auditoria/gerenciar', '<span class="fa fa-table"></span> Auditoria'); ?></li>
                            <li<?php echo ($segimento == 'settings/gerenciar' ) ? ' class="active"' : '' ;?>><?php echo anchor('settings/gerenciar', '<span class="fa fa-cogs"></span> Configurações'); ?></li>
                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <?php echo anchor('#', '<span class="fa fa-sign-out"></span>', 'class="mb-control" data-box="#mb-signout"'); ?>
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL --> 
                <?php endif; ?>
                {conteudo}
            <?php if(esta_logado(FALSE)): ?>                                   
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Tem certeza de que deseja sair?</p>                    
                        <p>Prima Não, se você quiser continuar o trabalho. Pressione Sim para sair do usuário atual.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('usuarios/logoff'); ?>" class="btn btn-success btn-lg">Sim</a>
                            <button class="btn btn-default btn-lg mb-control-close">Não</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
        <?php endif; ?>
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets/admin/atlant/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/admin/atlant/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
        <!-- START SCRIPTS -->
        {settings}
        {loadJS}
        {footerinc}
        <!-- END SCRIPTS -->         
    </body>
</html>