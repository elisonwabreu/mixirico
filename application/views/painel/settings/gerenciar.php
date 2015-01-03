<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); ?>
<script language="javascript" type="text/javascript">
// quando o documento estiver pronto, faça.
$(function(){
	$(".descricao_site").keyup(function(event){
		var target	= $(".descricao_site");
		var max		= target.attr('title');
		var len 	= $(this).val().length;
		var remain	= max - len;
		if(len > max){
			var val = $(this).val();
			$(this).val(val.substr(0, max));
			remain = 0;
		}
		target.html(remain)
	});
	$(".descricao_curta").keyup(function(event){
		var target	= $(".descricao_curta");
		var max		= target.attr('title');
		var len 	= $(this).val().length;
		var remain	= max - len;
		if(len > max){
			var val = $(this).val();
			$(this).val(val.substr(0, max));
			remain = 0;
		}
		target.html(remain)
	});
	$(".keywords_site").keyup(function(event){
		var target	= $(".keywords_site");
		var max		= target.attr('title');
		var len 	= $(this).val().length;
		var remain	= max - len;
		if(len > max){
			var val = $(this).val();
			$(this).val(val.substr(0, max));
			remain = 0;
		}
		target.html(remain)
	});
});
</script>
 <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <?php echo breadcrumb(); ?>
                </ul>
                <!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                erros_validacao();
                                get_msg('msgok');
                                get_msg('msgerro');
                                echo form_open('settings/gerenciar', array('class'=>'form-horizontal'));
                            ?>                                                            
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Informações do Site</a></li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Redes Sociais</a></li>
                                        <li><a href="#tab-third" role="tab" data-toggle="tab">Informações Comerciais</a></li>
                                        <li><a href="#tab-four" role="tab" data-toggle="tab">Elementos de SEO</a></li>
                                        <li><a href="#tab-five" role="tab" data-toggle="tab">Texto Sobre a Empresa</a></li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                                            <?php
                                            echo '<div class="form-group">';
                                            echo form_label('Nome do site','nome_site',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'nome_site', 'class'=>'form-control'), set_value('nome_site', get_setting('nome_site')), 'autofocus');
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('URL da logomarca','url_logomarca',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'url_logomarca', 'class'=>'form-control'), set_value('url_logomarca', get_setting('url_logomarca')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Email do administrador','email_adm',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'email_adm', 'class'=>'form-control'), set_value('email_adm', get_setting('email_adm')));
                                            echo '</div>';
                                            echo '</div>';
                                            ?>
                                        </div>
                                        <div class="tab-pane" id="tab-second">
                                            <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                            <?php
                                            echo '<div class="form-group">';
                                            echo form_label('Twitter','twitter',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'twitter', 'class'=>'form-control',  'placeholder'=>'@seutwitter'), set_value('twitter', get_setting('twitter')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Facebook','facebook',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'facebook', 'class'=>'form-control','placeholder'=>'https://www.facebook.com/seu.facebook'), set_value('facebook', get_setting('facebook')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Skype','skype',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'skype', 'class'=>'form-control',  'placeholder'=>'seu.skype'), set_value('skype', get_setting('skype')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Instagram','instagram',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'instagram', 'class'=>'form-control',  'placeholder'=>'https://www.instagram.com/seu.instagram'), set_value('instagram', get_setting('instagram')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('YouTube','youtube',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'youtube', 'class'=>'form-control',  'placeholder'=>'https://www.youtube.com/seu.youTube'), set_value('youtube', get_setting('youtube')));
                                            echo '</div>';
                                            echo '</div>';
                                            ?>
                                        </div>                                        
                                        <div class="tab-pane" id="tab-third">
                                            <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.</p>
                                            <?php
                                            echo '<div class="form-group">';
                                            echo form_label('Rua, Número','rua',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'rua', 'class'=>'form-control'), set_value('rua', get_setting('rua')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Bairro','bairro',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'bairro', 'class'=>'form-control'), set_value('bairro', get_setting('bairro')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('CEP','cep',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'cep', 'class'=>'form-control'), set_value('cep', get_setting('cep')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Cidade, Estado','cid_uf',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'cid_uf', 'class'=>'form-control'), set_value('cid_uf', get_setting('cid_uf')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Telefone Comercial','telcom',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'telcom', 'class'=>'form-control'), set_value('telcom', get_setting('telcom')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('Telefone Celular','telcel',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'telcel', 'class'=>'form-control'), set_value('telcel', get_setting('telcel')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label('E-mail Comercial','emailcom',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_input(array('name'=>'emailcom', 'class'=>'form-control'), set_value('emailcom', get_setting('emailcom')));
                                            echo '</div>';
                                            echo '</div>';
                                            ?>
                                        </div>
                                        <div class="tab-pane" id="tab-four">
                                            <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.</p>
                                            <?php
                                            echo '<div class="form-group">';
                                            echo form_label("Descrição do site (Restam <b><span class=\"descricao_site\" title=\"150\">150</span></b> caracteres)",'descricao_site',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_textarea(array('name'=>'descricao_site', 'class'=>'descricao_site form-control'), set_value('descricao_site', get_setting('descricao_site')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label("Descrição curta (Restam <b><span class=\"descricao_curta\" title=\"70\">70</span></b> caracteres)",'descricao_curta',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_textarea(array('name'=>'descricao_curta', 'class'=>'descricao_curta form-control'), set_value('descricao_curta', get_setting('descricao_curta')));
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo form_label("Palavras chave (Restam <b><span class=\"keywords_site\" title=\"255\">255</span></b> caracteres)",'keywords_site',array('class' => 'col-md-3 col-xs-12 control-label'));
                                            echo '<div class="col-md-6 col-xs-12">';
                                            echo form_textarea(array('name'=>'keywords_site', 'class'=>'keywords_site form-control'), set_value('keywords_site', get_setting('keywords_site')));
                                            echo '</div>';
                                            echo '</div>';
                                            ?>
                                        </div>
                                        <div class="tab-pane" id="tab-five">
                                            <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.</p>
                                            <?php
                                            echo '<div class="form-group">';
                                            echo '<div class="col-md-12 col-xs-12">';
                                            echo form_textarea(array('name'=>'txt_home', 'class'=>'htmleditor form-control', 'rows'=>15), set_value('txt_home', get_setting('txt_home')));
                                            echo '</div>';
                                            echo '</div>';
                                            ?>
                                        </div>
                                    </div>
                                    <div class="panel-footer">   
                                        <?php echo form_submit(array('name'=>'salvardados', 'class'=>'btn btn-primary pull-right'), 'Salvar Configuração'); ?>
                                    </div>
                                </div>                                
                            
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>