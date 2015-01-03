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
echo form_open('paginas/cadastrar', array('class'=>'custom'));
echo form_fieldset('Cadastrar nova página');
echo form_label('Título');
echo form_input(array('name'=>'titulo', 'class'=>'six'), set_value('titulo'), 'autofocus');
echo form_label('Slug (deixe em branco se não souber do que se trata)');
echo form_input(array('name'=>'slug', 'class'=>'six'), set_value('slug'));
echo '<p>'.anchor('#', 'Inserir imagens', 'class="addimg button tiny radius"');
echo anchor('midia/cadastrar', 'Upload de imagens', 'target="_blank" class="button tiny secondary radius"').'</p>';
echo form_label('Conteúdo');
echo form_textarea(array('name'=>'conteudo', 'class'=>'twelve htmleditor', 'rows'=>20), set_value('conteudo'));
echo anchor('paginas/gerenciar', 'Cancelar', array('class'=>'button radius alert espaco'));
echo form_submit(array('name'=>'cadastrar', 'class'=>'button radius'), 'Publicar Página');
echo form_fieldset_close();
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
		