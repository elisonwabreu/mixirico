<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
$idmidia = $this->uri->segment(3);
if ($idmidia==NULL):
    set_msg('msgerro', 'Escolha uma mídia para alterar', 'erro');
    redirect('midia/gerenciar');
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
    $query = $this->midia->get_byid($idmidia)->row();
    erros_validacao();
    get_msg('msgok');
    echo form_open(current_url(), array('class'=>'form-horizontal'));
    echo '<div class="form-group">';
    echo form_label('Tipo da mídia','tipo',array('class' => 'col-md-3 col-xs-12 control-label'));
    $options = array(
        '' => '.:: Selecione o tipo da mídia ::.',
        'B' => 'Banner',
        'G' => 'Geral'
    );
    $selected = array(set_value('tipo', $query->tipo));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_dropdown('tipo', $options, $selected,'class="form-control"');
    echo '</div>';
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label('Nome para exibição','nome',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'nome', 'class'=>'form-control'), set_value('nome', $query->nome), 'autofocus');
    echo '</div>';
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label('Descrição','descricao',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'descricao', 'class'=>'form-control'), set_value('descricao', $query->descricao));
    echo '</div>';
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo thumb($query->arquivo, 300, 180, $query->nome);
    echo '</div>';
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';    
    echo anchor('midia/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
    echo form_submit(array('name'=>'editar', 'class'=>'btn btn-info'), 'Salvar Dados');
    echo form_hidden('idmidia', $query->id);
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