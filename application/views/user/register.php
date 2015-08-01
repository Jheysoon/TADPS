<?php $this->load->view('includes/header') ?>
<body>
    <div class="content-section-c">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <form class="" action="index.html" method="post">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="txtFname" value="">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="txtLname" value="">
                    <label>Middlename</label>
                    <input type="text" class="form-control" name="txtMname" value="">
                    <a href="<?php echo base_url() ?>" class="btn btn-default pull-left margin-top-5px">Back</a>
                    <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Register">
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
