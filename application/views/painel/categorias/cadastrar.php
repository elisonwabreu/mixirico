<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
$query = $this->categorias->get_all()->result();
foreach ($query as $linha){
        $opcoes [0] = 'Se houver necessidade escolha uma categoria PAI';
        $opcoes [$linha->id]  = $linha->nome;
}
?>
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
echo form_open_multipart('categorias/cadastrar', array('class'=>'form-horizontal'));
echo '<div class="form-group">';
echo form_label('Nome','nome',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'nome', 'class'=>'form-control'), set_value('nome'), 'autofocus');
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('Categoria Pai','cat_pai_id',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_dropdown('cat_pai_id', $opcoes,'','class="form-control"');
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('Descrição','descricao',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_textarea(array('name'=>'descricao', 'class'=>'form-control'), set_value('descricao'));
echo anchor('categorias/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
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