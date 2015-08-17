<?php $this->load->view('includes/header') ?>
<body>
    <?php
        if($this->session->has_userdata('id'))
        {
            $this->load->view('includes/menu', array('active' => ''));
        }
        else {
            ?>
            <div class="content-section-c">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
            </div>
    <?php
        }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <form class="" action="/register" method="post">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo set_value('fname') ?>" autofocus>
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lname" value="<?php echo set_value('lname') ?>">
                    <label>Middlename</label>
                    <input type="text" class="form-control" name="mname" value="<?php echo set_value('mname') ?>">
                    <?php if($this->session->has_userdata('id')){ ?>
                    <label>Office</label>
                    <input type="text" class="form-control" name="office" value="<?php echo set_value('office') ?>">
                    <?php }else{ ?>
                    <label>Contact Number</label>
                    <input type="number" class="form-control" name="contact" value="<?php echo set_value('contact') ?>">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>">
                    <?php } ?>
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="con_pass" class="form-control" value="<?php echo set_value('con_pass') ?>">
                    <a href="<?php echo ($this->session->has_userdata('id')) ? base_url('users') : base_url() ?>" class="btn btn-default pull-left margin-top-5px">Back</a>
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
