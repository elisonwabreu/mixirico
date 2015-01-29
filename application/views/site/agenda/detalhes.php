<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
echo $map['js'];
$slug = $this->uri->segment(3);
$query = $this->agenda->get_byid($slug)->row();
echo '<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">'.$query->titulo.'</h3>
  </div>
  <div class="panel-body pageErros">';

echo '
        <div class="row">
            <div class="col-sm-9">
                <h3 class="pull-left">'.$query->data.'</h3>
            </div>
            <div class="col-sm-3">
                <h4 class="pull-right">
                <small><em></em></small>
                </h4>
            </div>
        </div>

        <div class="panel-body">
            <a href="#" class="thumbnail">
                ' . thumb($query->banner, 450, 450, $query->titulo) . '
            </a>
            ' . to_html($query->descricao) . '
        </div>

        <div class="panel-footer">
            <div class="text-center"><a href="#mapCF" role="button" data-toggle="modal" data-target="#mapCF" class="btn btn-primary mapCF"> Ver Mapa </a></div>
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
                <h4 class="modal-title">LOCAL DO SHOW.</h4>
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