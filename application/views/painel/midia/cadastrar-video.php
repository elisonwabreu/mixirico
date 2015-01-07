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
get_msg('msgerro');
echo form_open_multipart('midia/cadastrar_video', array('class'=>'form-horizontal'));
echo '<div class="form-group">';
echo form_label('URL YouTube:*','embed',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'embed', 'class'=>'form-control','palceholder' => 'https://www.youtube.com/watch?v=OkVwrEF0UyQ','required'), set_value('nome'), 'autofocus');
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo anchor('midia/gerenciar_video', 'Cancelar', array('class'=>'btn btn-danger espaco'));
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