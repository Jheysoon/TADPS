<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-lg">
                    <form action="/add_admin" method="post" enctype="multipart/form-data">
                        <?php
                            echo $error;
                            echo $this->session->flashdata('message');
                        ?>
                        <div class="col-sm-6 col-sm-offset-2">
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
                        <span class="clearfix"></span>
                        <br>
                        <label>Firstname</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo set_value('fname') ?>" autofocus>
                        <label>Middlename</label>
                        <input type="text" class="form-control" name="mname" value="<?php echo set_value('mname') ?>">
                        <label>Lastname</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo set_value('lname') ?>">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="1" <?php echo set_select('gender', 1, TRUE) ?>>Male</option>
                            <option value="0" <?php echo set_select('gender', 2) ?>>Female</option>
                        </select>
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo set_value('address') ?>">
                        <label>Birthday</label>
                        <input type="date" class="form-control" name="bday" value="<?php set_value('bday') ?>">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="contact" value="<?php echo set_value('contact') ?>">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                        <label>Confirm Password</label>
                        <input type="password" name="con_pass" class="form-control" value="<?php echo set_value('con_pass') ?>">
                        <a href="<?php echo base_url() ?>" class="btn btn-default pull-left margin-top-5px">Back</a>
                        <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Register">
                        <span class="clearfix"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:30px;">
        &nbsp;
    </div>
    <?php $this->load->view('includes/footer') ?>
    <script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
</body>
</html>
