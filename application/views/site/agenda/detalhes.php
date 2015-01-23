<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
echo $map['js'];
$slug = $this->uri->segment(3);
$query = $this->agenda->get_byid($slug)->row();
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">'.$query->titulo.'</h3>
  </div>
  <div class="panel-body pageErros">';
echo '<div class="detprodutos">';
$preco = $query->data;
echo '
        ' . thumb($query->banner, 450, 450, $query->titulo) . '
        ' . to_html($query->descricao) . '
    ';
echo '</div>';
echo '<a href="' . base_url('site/faleconosco') . '" class="btn btn-inverse btn-large btn-block" title="Fale Conosco">Fale Conosco</a>';
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