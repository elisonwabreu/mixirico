<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
$queryC = $this->categorias->get_all()->result();
foreach ($queryC as $linha){
        $opcoes [0] = 'Se houver necessidade escolha uma categoria PAI';
        $opcoes [$linha->id]  = $linha->nome;
}

$idcategorias = $this->uri->segment(3);
if ($idcategorias==NULL):
        set_msg('msgerro', 'Escolha uma mídia para alterar', 'erro');
        redirect('categorias/gerenciar');
endif; 
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
        $query = $this->categorias->get_byid($idcategorias)->row();
        erros_validacao();
        get_msg('msgok');
        echo form_open(current_url(), array('class'=>'form-horizontal'));
        echo '<div class="form-group">';
        echo form_label('Nome','nome',array('class' => 'col-md-3 col-xs-12 control-label'));
        echo '<div class="col-md-6 col-xs-12">';
        echo form_input(array('name'=>'nome', 'class'=>'form-control'), set_value('nome', $query->nome), 'autofocus');
        echo '</div>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo form_label('Categoria Pai','cat_pai_id',array('class' => 'col-md-3 col-xs-12 control-label'));
        echo '<div class="col-md-6 col-xs-12">';
        echo form_dropdown('cat_pai_id', $opcoes, $query->cat_pai_id,'class="form-control"');
        echo '</div>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo form_label('Descrição','descricao',array('class' => 'col-md-3 col-xs-12 control-label'));
        echo '<div class="col-md-6 col-xs-12">';
        echo form_textarea(array('name'=>'descricao', 'class'=>'form-control'), set_value('descricao', $query->descricao));
        echo form_hidden('idcategorias', $query->id);
        echo anchor('categorias/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
        echo form_submit(array('name'=>'editar', 'class'=>'btn btn-info'), 'Salvar Dados');
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