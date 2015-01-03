<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); ?>
    <script type="text/javascript">
            $(function(){
                    $('.deletareg').click(function(){
                            if (confirm("Deseja realmente excluir este registro?\nEsta operação não poderá ser desfeita!")) return true; else return false;
                    });
            });
    </script>
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
            //get_msg('msgok');
            //get_msg('msgerro');
            $modo = $this->uri->segment(3);
            if ($modo == 'all'):
                $limite = 0;
            else:
                $limite = 50;
                echo '<p>Mostrando os últimos 50 registros, para ver todo histórico '.anchor('auditoria/gerenciar/all', 'clique aqui').'</p>';
            endif;

            ?>
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title"><?php echo getTitulo(); ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>                                
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Data e hora</th>
                                <th>Operação</th>
                                <th>Observação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = $this->auditoria->get_all($limite)->result();
                            foreach ($query as $linha):
                                echo '<tr>';
                                printf('<td>%s</td>', $linha->usuario);
                                printf('<td>%s</td>', date('d/m/Y H:i:s', strtotime($linha->data_hora)));
                                printf('<td>%s</td>', '<span data-toggle="tooltip" data-placement="right" title="'.$linha->query.'">'.$linha->operacao.'</span>');
                                printf('<td>%s</td>', $linha->observacao);
                                echo '</tr>';
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- END DEFAULT DATATABLE -->    
 </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->            