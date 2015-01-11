<?php if (!defined("BASEPATH")) exit("No direct script access allowed"); ?>
<script type="text/javascript">
    $(function() {
        $('.deletareg').click(function() {
            if (confirm("Deseja realmente excluir este registro?\nEsta operação não poderá ser desfeita!"))
                return true;
            else
                return false;
        });
        $('input').click(function() {
            (this).select();
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
    get_msg('msgok');
    get_msg('msgerro');
    ?>
    <div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title"><?php echo getTitulo(); ?></h3>
        <ul class="panel-controls">
            <li><?php echo anchor('midia/cadastrar_galeria', '<span class="fa fa-plus-circle"></span>', ''); ?></li>
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
        </ul>                               
    </div>
    <div class="panel-body">
        <table class="table datatable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Link</th>
                <th>Descrição</th>
                <th>Miniatura</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $this->galerias->get_all()->result();
            foreach ($query as $linha):
                echo '<tr>';
                printf('<td>%s</td>', $linha->titulo);
                printf('<td><input type="text" class="form-control" value="%s" /></td>', base_url("assets/uploads/$linha->arquivo"));
                printf('<td>%s</td>', resumo_post($linha->descricao, 6));
                printf('<td>%s</td>', thumb($linha->arquivo, 100, 75, $linha->titulo));
                printf('<td class="text-center">%s%s%s%s</td>', anchor("assets/uploads/$linha->arquivo", ' <i class="glyphicon glyphicon-search"></i> ', array('class' => 'table-actions', 'data-toggle' => 'tooltip','data-placement' => 'top', 'data-original-title' => 'Visualizar capa da galeria.', 'target' => '_blank')), anchor("midia/cadastrar_img_galeria/$linha->id", ' <i class="glyphicon glyphicon-plus"></i> ', array('class' => 'table-actions', 'data-toggle' => 'tooltip','data-placement' => 'top', 'data-original-title' => 'Adicionar imagens a galeria.')), anchor("midia/editar_galeria/$linha->id", ' <i class="glyphicon glyphicon-edit"></i> ', array('class' => 'table-actions', 'data-toggle' => 'tooltip','data-placement' => 'top', 'data-original-title' => 'Editar galeria.')), anchor("midia/excluir_galeria/$linha->id", ' <i class="glyphicon glyphicon-trash"></i> ', array('class' => 'table-actions deletareg', 'data-toggle' => 'tooltip','data-placement' => 'top', 'data-original-title' => 'Excluir a galeria.')));
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