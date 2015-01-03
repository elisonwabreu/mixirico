<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); ?>
<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <?php echo breadcrumb(); ?>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> <?php echo getTitulo(); ?></h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                
                                <div class="panel-body">
<?php
		erros_validacao();
		get_msg('msgok');
		echo form_open('usuarios/cadastrar', array('class'=>'form-horizontal'));
                echo '<div class="form-group">';
		echo form_label('Nome completo','nome',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo form_input(array('name'=>'nome', 'class'=>'form-control'), set_value('nome'), 'autofocus');
                echo '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
		echo form_label('Email','email',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo form_input(array('name'=>'email', 'class'=>'form-control'), set_value('email'));
                echo '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
		echo form_label('Login','login',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo form_input(array('name'=>'login', 'class'=>'form-control'), set_value('login'));
                echo '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
		echo form_label('Senha','senha',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo form_password(array('name'=>'senha', 'class'=>'form-control'), set_value('senha'));
                echo '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
		echo form_label('Repita a senha','senha2',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo form_password(array('name'=>'senha2', 'class'=>'form-control'), set_value('senha2'));
                echo '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
                echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo form_checkbox(array('name'=>'adm'), '1').' Dar poderes administrativos a este usuário<br />';
                echo '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
                echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
                echo '<div class="col-md-6 col-xs-12">';
		echo anchor('usuarios/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
		echo form_submit(array('name'=>'cadastrar', 'class'=>'btn btn-info'), 'Salvar Dados');
		echo '</div>';
                echo '</div>';
                
		echo form_close();
		?>
</div>
            </div><!-- END DEFAULT DATATABLE -->    
 </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->