<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); ?>
<div class="login-container">        
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Bem vindo</strong>, Por favor efetue o login.</div>
            <?php
            echo form_open('usuarios/login', array('class'=>'form-horizontal loginform'));
            get_msg('errologin');
            get_msg('logoffok');
            erros_validacao();
            ?>
            <div class="form-group">
                <div class="col-md-12">
                    <?php echo form_input(array('name'=>'usuario','class'=>'form-control','placeholder'=>'Usuário'), set_value('usuario'), 'autofocus');?>
                </div>
            </div>
            <?php echo form_hidden('redirect', $this->session->userdata('redir_para')); ?>
            <div class="form-group">
                <div class="col-md-12">
                    <?php echo form_password(array('name'=>'senha','class'=>'form-control','placeholder'=>'Senha'), set_value('senha')); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <?php echo '<p>'.anchor('usuarios/nova_senha', 'Esqueci minha senha',array('class'=>'btn btn-link btn-block')).'<p>';?>
                </div>
                <div class="col-md-6">
                    <?php echo form_submit(array('name'=>'logar', 'class'=>'btn btn-info btn-block'), 'Login'); ?>
                </div>
            </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2014 SCWPanel
            </div>
            <div class="pull-right">
                <a href="#">Sobre</a> |
                <a href="#">Termos de uso</a> |
                <a href="#">Contate-nos</a>
            </div>
        </div>
    </div>
</div>