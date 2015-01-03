<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

		$idpagina = $this->uri->segment(3);
		if ($idpagina==NULL):
			set_msg('msgerro', 'Escolha uma página para alterar', 'erro');
			redirect('paginas/gerenciar');
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
    $query = $this->paginas->get_byid($idpagina)->row();
    echo breadcrumb();
    erros_validacao();
    get_msg('msgok');
    get_msg('msgerro');
    echo form_open(current_url(), array('class'=>'custom'));
    echo form_fieldset('Alterar página');
    echo form_label('Título');
    echo form_input(array('name'=>'titulo', 'class'=>'six'), set_value('titulo', $query->titulo), 'autofocus');
    echo form_label('Slug (deixe em branco se não souber do que se trata)');
    echo form_input(array('name'=>'slug', 'class'=>'six'), set_value('slug', $query->slug));
    echo '<p>'.anchor('#', 'Inserir imagens', 'class="addimg button tiny radius"');
    echo anchor('midia/cadastrar', 'Upload de imagens', 'target="_blank" class="button tiny secondary radius"').'</p>';
    echo form_label('Conteúdo');
    echo form_textarea(array('name'=>'conteudo', 'class'=>'twelve htmleditor', 'rows'=>20), set_value('conteudo', to_html($query->conteudo)));
    echo anchor('paginas/gerenciar', 'Cancelar', array('class'=>'button radius alert espaco'));
    echo form_submit(array('name'=>'editar', 'class'=>'button radius'), 'Salvar dados');
    echo form_hidden('idpagina', $query->id);
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
		