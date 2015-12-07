<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="card" style="background-color: #FFF;">
                    <form action="/change_password" method="post">

                        <div class="card-header">
                            <h3 class="text-center">Change Password</h3>
                        </div>
                        <div class="card-block">
                            <?php echo $error ?>
                            <label>Old password</label>
                            <input type="password" class="form-control" name="old_pass" value="<?php echo set_value('old_pass') ?>" autofocus>
                            <label>New password</label>
                            <input type="password" class="form-control" name="new_pass" value="<?php echo set_value('new_pass') ?>">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="r_pass" value="<?php echo set_value('r_pass') ?>">
                        </div>
                        <div class="card-footer" style="background-color: #FFF;">
                            <a href="<?php echo base_url() ?>" class="btn btn-default pull-left">Back</a>
                            <input type="submit" class="btn btn-primary pull-right" value="Update">
                            <span class="clearfix"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
