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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
    <script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>
</body>
</html>
