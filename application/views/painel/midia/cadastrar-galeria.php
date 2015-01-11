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
echo form_open_multipart('midia/cadastrar_galeria', array('class'=>'form-horizontal'));

echo '<div class="form-group">';
echo form_label('Titilo da Galeria','titulo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'titulo', 'class'=>'form-control'), set_value('titulo'), 'autofocus');
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Capa da Galeria','arquivo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_upload(array('name'=>'arquivo', 'class'=>'form-control'), set_value('arquivo'));
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Descrição','descricao',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_textarea(array('name'=>'descricao', 'class'=>'form-control'), set_value('descricao'));
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo anchor('midia/gerenciar_galeria', 'Cancelar', array('class'=>'btn btn-danger espaco'));
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