<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

		$idpagina = $this->uri->segment(3);
		if ($idpagina==NULL):
			set_msg('msgerro', 'Escolha uma página para alterar', 'erro');
			redirect('agenda/gerenciar');
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
    $query = $this->agenda->get_byid($idpagina)->row();
    erros_validacao();
    get_msg('msgok');
    get_msg('msgerro');
    echo form_open(current_url(), array('class'=>'form-horizontal'));
    
    echo '<div class="form-group">';
    echo form_label('Título','titulo',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'titulo', 'class'=>'form-control'), set_value('titulo', $query->titulo), 'autofocus');
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Data','data',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'data', 'class'=>'form-control'), set_value('data', $query->data));
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Hora','hora',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'hora', 'class'=>'form-control'), set_value('hora', $query->hora));
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Logradouro','logradouro',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'logradouro', 'class'=>'form-control','placeholder' => 'Rua, Travessa, Avenida. Ex. Rua maracanlha'), set_value('logradouro', $query->logradouro));
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Numero','numero',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'numero', 'class'=>'form-control'), set_value('numero', $query->numero));
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Bairro','bairro',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'bairro', 'class'=>'form-control','placeholder' => 'Rua, Travessa, Avenida. Ex. Rua maracanlha'), set_value('bairro', $query->bairro));
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Cidade','cidade',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'cidade', 'class'=>'form-control'), set_value('cidade', $query->cidade));
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label('Estado','estado',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_input(array('name'=>'estado', 'class'=>'form-control'), set_value('estado', $query->estado));
    echo '</div>';
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo thumb($query->banner, 300, 180, $query->titulo); 
    echo '</div>';
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo '<p>'. anchor('#', 'Inserir imagens', array('class'=>'btn btn-info addimg','data-toggle'=>'modal','data-target'=>'#modal_basic'));
    echo anchor('midia/cadastrar', 'Upload de imagens', 'target="_blank" class="btn btn-warning radius"').'</p>';
    echo '</div>';
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label('Descricao','descricao',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo form_textarea(array('name'=>'descricao', 'class'=>'htmleditor form-control', 'rows'=>20), set_value('descricao', to_html($query->descricao)));
    echo form_hidden('idpagina', $query->id);
    echo '</div>';
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label('','',array('class' => 'col-md-3 col-xs-12 control-label'));
    echo '<div class="col-md-6 col-xs-12">';
    echo anchor('agenda/gerenciar', 'Cancelar', array('class'=>'btn btn-danger espaco'));
    echo form_submit(array('name'=>'editar', 'class'=>'btn btn-info'), 'Salvar dados');
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
		