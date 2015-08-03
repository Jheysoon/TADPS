<?php $this->load->view('includes/header') ?>
<body>
    <div class="content-section-c">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <?php echo $error; ?>
                    <div>
                        <form action="/login" class="center-block" method="post" style="max-width:300px;">
                            <h3>Please Sign In</h3>
                            <input type="text" class="form-control input-lg" name="username" value="<?php echo set_value('username'); ?>" autofocus placeholder="Username">
                            <input type="text" class="form-control input-lg margin-top-5px" name="password" placeholder="Password">
                            <a href="<?php echo base_url(); ?>" class="btn btn-default btn-sm margin-top-5px">Back</a>
                            <input type="submit" class="btn btn-primary btn-sm pull-right margin-top-5px" name="btnSubmit" value="Login">
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
