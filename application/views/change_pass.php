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
                <form action="/change_password" method="post">
                    <label>Old password</label>
                    <input type="text" class="form-control" name="old_pass" value="<?php echo set_value('old_pass') ?>">
                    <label>New password</label>
                    <input type="text" class="form-control" name="new_pass" value="<?php echo set_value('new_pass') ?>">
                    <label>Re-peat password</label>
                    <input type="text" class="form-control" name="r_pass" value="<?php echo set_value('r_pass') ?>">
                    <a href="<?php echo base_url() ?>" class="btn btn-default pull-left margin-top-5px">Back</a>
                    <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Update">
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
