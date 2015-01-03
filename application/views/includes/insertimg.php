<script type="text/javascript">
	$(function(){
		$('.buscarimg').click(function(){
			var destino = "<?php echo base_url('midia/get_imgs') ?>";
			var dados = $(".buscartxt").serialize();
			$.ajax({
                            type: "POST",
                            url: destino,
                            data: dados,
                            success: function(retorno){
                                $(".retorno").html(retorno);
                            }
			});
		});
		$(".limparimg").click(function(){
                    $(".buscartxt").val('');
                    $(".retorno").html('');
		});
	});
</script>

<div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">Inserir imagem na descrição</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-8">
                    <?php echo form_input(array('name'=>'pesquisarimg', 'class'=>'buscartxt form-control')); ?>
                </div>
                <div class="col-md-4">
                    <?php echo form_button('', 'Buscar', 'class="btn btn-info buscarimg"'); ?>
                    <?php echo form_button('', 'Limpar', 'class="btn btn-danger limparimg"'); ?>
                </div>
                <div class="col-md-12 retorno">&nbsp;</div>
            </div>
        </div>
    </div>
</div> 