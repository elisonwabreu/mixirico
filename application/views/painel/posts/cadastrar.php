<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");?>
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
get_msg('msgerro');
echo form_open('posts/cadastrar', array('class'=>'form-horizontal'));
echo '<div class="form-group">';
echo form_label('Título','titulo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'titulo', 'class'=>'form-control'), set_value('titulo'), 'autofocus');
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('Slug','slug',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'slug', 'class'=>'form-control', 'placeholder' => 'deixe em branco se não souber do que se trata'), set_value('slug'));
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo '<p>'. anchor('#', 'Inserir imagens', array('class'=>'btn btn-info addimg','data-toggle'=>'modal','data-target'=>'#modal_basic'));
echo anchor('midia/cadastrar', 'Upload de imagens', 'target="_blank" class="btn btn-warning secondary radius"').'</p>';
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('Conteúdo','conteudo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_textarea(array('name'=>'conteudo', 'class'=>'htmleditor form-control', 'rows'=>20), set_value('conteudo'));
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo anchor('posts/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
echo form_submit(array('name'=>'cadastrar', 'class'=>'btn btn-info'), 'Publicar Página');
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
<?php
incluir_arquivo('insertimg');
		