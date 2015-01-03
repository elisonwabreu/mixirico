<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
$query = $this->categorias->get_all()->result();
foreach ($query as $linha){
        $opcoes[0]  = '.:: Escolha uma categoria ::.';
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
echo form_open_multipart('produtos/cadastrar', array('class'=>'form-horizontal'));
echo '<div class="form-group">';
echo form_label('Categoria','cat_prod',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_dropdown('cat_prod', $opcoes,'','class="form-control"');
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('Título','titulo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'titulo', 'class'=>'form-control'), set_value('titulo'), 'autofocus');
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_hidden(array('name'=>'slug', 'class'=>'form-control'), set_value('slug'));
echo form_label('Preço','preco',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_input(array('name'=>'preco', 'class'=>'form-control'), set_value('preco'));
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo form_label('Capa do Produto','arquivo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_upload(array('name'=>'arquivo', 'class'=>'form-control'), set_value('arquivo'));
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo '<div class="col-md-6 col-xs-12 pull-right">';
echo '<p>'. anchor('#', 'Inserir imagens', array('class'=>'btn btn-info addimg','data-toggle'=>'modal','data-target'=>'#modal_basic'));
echo anchor('midia/cadastrar', 'Upload de imagens', 'target="_blank" class="btn btn-warning"').'</p>';
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Conteúdo','conteudo',array('class' => 'col-md-3 col-xs-12 control-label'));
echo '<div class="col-md-6 col-xs-12">';
echo form_textarea(array('name'=>'conteudo', 'class'=>'htmleditor form-control', 'rows'=>20), set_value('conteudo'));
echo anchor('produtos/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
echo form_submit(array('name'=>'cadastrar', 'class'=>'btn btn-info'), 'Publicar Produto');
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
		