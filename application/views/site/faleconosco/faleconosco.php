<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
echo $map['js'];
get_msg('msgok');
get_msg('msgerro');
echo '
                <div class="row central">
                        <form action="faleconosco" method="post" accept-charset="utf-8" class="form-horizontal marron2 radius shadow central">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Fale Conosco</legend>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label">Nome</label>
                          <div class="controls">
                            <input id="nome" name="nome" type="text" placeholder="Digite seu nome aqui" class="input-xlarge" required="">

                          </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="control-group">
                          <label class="control-label">E-mail</label>
                          <div class="controls">
                            <div class="input-prepend">
                              <span class="add-on">@</span>
                              <input id="email" name="email" class="span3" placeholder="Seu e-mail aqui" type="text" required="">
                            </div>

                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label">Assunto</label>
                          <div class="controls">
                            <input id="assunto" name="assunto" type="text" placeholder="seu assunto aqui" class="input-xlarge" required="">

                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="control-group">
                          <label class="control-label">Mensagem</label>
                          <div class="controls">                     
                            <textarea id="mensagem" class="input-xlarge" name="mensagem">sua mensagem aqui</textarea>
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="control-group">
                          <label class="control-label"></label>
                          <div class="controls">
                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Enviar</button>
                          </div>
                        </div>

                        </fieldset>
                        </form>
                </div>
                <a href="#mapCF" role="button" class="btn btn-danger btn-block mapCF" data-toggle="modal" data-target="#mapCF">Como chegar</a>
';
?>
<!-- /.modal -->
        <div class="modal fade" id="mapCF">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Nossa Localização.</h4>

                    </div>
                    <div class="modal-body">
                        <div class="row-fluid">                            
                            <?php echo $map['html']; ?>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->