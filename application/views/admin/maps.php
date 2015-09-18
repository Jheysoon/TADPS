<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'maps')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Hazzard Map</h3></div>
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form action="/hazzard_maps" method="post">
                                    <?php echo $error; ?>
                                    <div class="col-sm-4 col-sm-offset-3">
                                        <div class="fileinput fileinput-new center-block" style="margin-left:100px;" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="userfile">
                                                </span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter caption / name" name="caption" value="">
                                    <button type="submit" class="btn btn-primary pull-right margin-top-5px" name="button">
                                        <i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;Add
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
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
                                        <div class="col-md-4">
                                            <figure class="uk-overlay uk-overlay-hover" href="">
                                                <a href="#" data-param="<?php echo $maps['pic'] ?>" class="hazzardmap">
                                                    <img src="/assets/uploads/<?php echo $maps['pic']?>" class="img-thumbnail" alt="...">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $maps['caption'] ?></figcaption>
                                                </a>
                                            </figure>
                                            <a href="/delete_map/<?php echo $maps['id'] ?>" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-danger btn-sm pull-right">Delete</a>
                                            <span class="clearfix"></span>
                                        </div>
                                        <?php
                                        if($ctr == 3)
                                        {
                                            $ctr = 0;
                                            ?>
                                            </div>
                                    <?php
                                        }
                                        $ctr++;
                                    }
                                 ?>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>

    </div>
    <?php $this->load->view('includes/footer') ?>
    <script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>
</body>
</html>
