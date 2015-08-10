<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'hotline')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <form class="" action="index.html" method="post">
                        <label>Name of Office</label>
                        <input type="text" name="office" class="form-control" value="">
                        <label>Contact No.</label>
                        <input type="text" name="number" class="form-control" value="">
                        <input type="submit" name="name" class="btn btn-primary pull-right margin-top-5px" value="Add">
                        <span class="clearfix"></span>
                    </form>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
