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
                <form class="" action="/register" method="post">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo set_value('fname') ?>">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lname" value="<?php echo set_value('lname') ?>">
                    <label>Middlename</label>
                    <input type="text" class="form-control" name="mname" value="<?php echo set_value('mname') ?>">
                    <label>Office</label>
                    <input type="text" class="form-control" name="office" value="<?php echo set_value('office') ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo set_value('password') ?>">
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
