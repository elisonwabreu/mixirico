<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); ?>
<div class="login-container">        
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Recuperação de senha.</strong></div>
            <?php
            echo form_open('usuarios/nova_Senha', array('class'=>'form-horizontal loginform'));
            get_msg('errologin');
            get_msg('logoffok');
            erros_validacao();
            ?>
            <div class="form-group">
                <div class="col-md-12">
                    <?php echo form_input(array('name'=>'email','class'=>'form-control','placeholder'=>'Seu email'), set_value('email'), 'autofocus'); ?>
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <?php echo form_submit(array('name'=>'novasenha', 'class'=>'btn btn-info btn-block'), 'Enviar nova senha'); ?>
                </div>
            </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2014 SCWPanel
            </div>
            <div class="pull-right">
                <?php echo '<p>'.anchor('usuarios/login', 'Fazer login').'<p>'; ?>
            </div>
        </div>
    </div>
</div>		