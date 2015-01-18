<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Fale Conosco!</h3>
  </div>
  <div class="panel-body pageErros">';
echo $map['js'];
get_msg('msgok');
get_msg('msgerro');
echo '
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form method="post" accept-charset="utf-8" action="faleconosco" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <select id="assunto" name="assunto" class="form-control" required="required">
                                <option value="" selected="">Escolha um assunto:</option>
                                <option value="Elogios / Criticas">Elogios / Criticas</option>
                                <option value="Vem pra cá Mixirico">Vem pra cá Mixirico</option>
                                <option value="Outros mungangos">Outros mungangos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" class="form-control" rows="9" cols="25" required="required" placeholder="mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-danger pull-right" id="btnContactUs">Enviar Mensagem</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
';
echo '</div>';
echo '</div>';
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