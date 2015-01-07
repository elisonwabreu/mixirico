<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");?>
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
			get_msg('msgok');
			get_msg('msgerro');		
			?>
			<div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title"><?php echo getTitulo(); ?></h3>
                                <ul class="panel-controls">
                                    <li><?php echo anchor('midia/cadastrar_video', '<span class="fa fa-plus-circle"></span>', ''); ?></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>                                
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
				<thead>
					<tr>
						<th>Título</th>
						<th>Url</th>
						<th>Resumo</th>
						<th>Miniatura</th>
						<th class="text-center">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = $this->midia->get_video_all()->result();
					foreach ($query as $linha):
                                                $urlVideo = ( $linha->server == 'YouTube' ) ? 'https://www.youtube.com/watch?v='.$linha->embed : $linha->embed;
						echo '<tr>';
						printf('<td>%s</td>', $linha->titulo);
						printf('<td>%s</td>', $urlVideo);
						printf('<td>%s</td>', resumo_post($linha->descricao, 6));
                                                printf('<td><img src="%s" alt="%s" /></td>', $linha->thumb, $linha->titulo);
						printf('<td class="text-center">%s%s%s</td>',anchor("$urlVideo", ' <i class="glyphicon glyphicon-search"></i> ', array('class' => 'table-actions', 'title' => 'Visualizar', 'target' => '_blank')), anchor("midia/editar_video/$linha->id", ' <i class="glyphicon glyphicon-edit"></i> ', array('class'=>'table-actions', 'title'=>'Editar')), anchor("midia/excluir_video/$linha->id", ' <i class="glyphicon glyphicon-trash"></i> ', array('class'=>'table-actions deletareg', 'title'=>'Excluir')));
						echo '</tr>';
					endforeach;
					?>
				</tbody>
			</table>
		</div>
            </div>
                                     </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->