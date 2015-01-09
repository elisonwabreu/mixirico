<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); ?>
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
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3><span class="fa fa-mail-forward"></span> File Input</h3>
                                <p>Add class <code>file</code> to file input to get Bootstrap FileInput plugin</p>                                    
                                <form enctype="multipart/form-data" class="form-horizontal">                                        
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Default</label>
                                            <input type="file" multiple class="file" data-preview-file-type="any"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Disabled</label>
                                            <input type="file" multiple readonly="true" class="file" data-preview-file-type="any"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Simple</label><br/>
                                            <input type="file" multiple id="file-simple"/>
                                        </div>                                            
                                    </div>
                                </form>
                            </div>
                        </div>
</div>
            </div><!-- END DEFAULT DATATABLE -->    
 </div>
            </div>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->