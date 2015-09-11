<?php $this->load->view('includes/header'); ?>
<body>
<?php $this->load->view('includes/outsidemenu') ?>
<div class="contaner-fluid">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title">Hazzard Maps</h4></div>
            <div class="panel-body">

                <?php
                    $m = $this->db->get('hazard_maps')->result_array();
                    $ctr = 1;
                    foreach($m as $maps)
                    {
                        if($ctr == 1)
                        {
                            ?>
                            <div class="col-md-12" style="margin-top:10px;">
                    <?php
                        }
                        ?>
                        <div class="col-md-3">
                            <figure class="uk-overlay uk-overlay-hover img-thumbnail" href="">
                                <a href="#" data-param="<?php echo $maps['pic'] ?>" class="hazzardmap">
                                    <img src="/assets/uploads/<?php echo $maps['pic']?>" alt="...">
                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $maps['caption'] ?></figcaption>
                                </a>
                            </figure>
                        </div>
                        <?php
                        if($ctr == 4)
                        {
                            $ctr = 0;
                            ?>
                            </div>
                    <?php
                        }
                        $ctr++;
                    }
                 ?>
            </div>
        </div>
        <br />
        <br />
    </div>
</div>


<div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header navbar navbar-inverse">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:red">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:white">Flood Hazzard Map</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <a href="" id="download_link" class="btn btn-primary pull-right" download="hazzard_map" target="_blank">Download</a>
                        <span class="clearfix"></span>
                        <br>
                        <img src="" id="img_hazzard" class="img-thumbnail" alt="..." width="100%">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
    $this->load->view('forms/login');
    $this->load->view('forms/registration');
    $this->load->view('includes/footer');
?>
<script type="text/javascript" src="/assets/js/login_register.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.hazzardmap').click(function(e){
            $img    = $(this).data('param');
            $path   = '/assets/uploads/' + $img;
            $('#download_link').attr('href', $path);
            $('#img_hazzard').attr('src', $path);
            $('#map').modal('show');
            e.preventDefault();
        });
    });
</script>
</body>
</html>
