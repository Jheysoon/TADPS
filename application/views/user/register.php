<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/outsidemenu') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card card-primary-outline" style="background-color: #FFF;">
                    <div class="card-header">
                        <h3 class="card-title text-center">Registration Form</h3>
                    </div>
                    <div class="card-block">
                        <?php
                            echo $error;
                            echo $this->session->flashdata('message');
                        ?>
                    </div>
                    <form action="/register" method="post" enctype="multipart/form-data">
                        <div class="card-block">

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
                            <br>
                            <label>Firstname</label>
                            <input type="text" class="form-control" name="fname" value="<?php echo set_value('fname') ?>" autofocus>
                            <label>Middlename</label>
                            <input type="text" class="form-control" name="mname" value="<?php echo set_value('mname') ?>">
                            <label>Lastname</label>
                            <input type="text" class="form-control" name="lname" value="<?php echo set_value('lname') ?>">
                            <label>Gender</label>
                            <span class="clearfix"></span>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="1" <?php echo set_radio('gender', 1, TRUE) ?>>
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="0" <?php echo set_radio('gender', 0) ?>>
                                        Female
                                    </label>
                                </div>
                            </div>
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo set_value('address') ?>">
                            <label>Birthday</label>
                            <input type="date" class="form-control" name="bday" value="<?php set_value('bday') ?>">
                            <?php if($this->session->has_userdata('id')){ ?>
                            <label>Office</label>
                            <input type="text" class="form-control" name="office" value="<?php echo set_value('office') ?>">
                            <?php }else{ ?>
                            <label>Contact Number</label>
                            <input type="text" class="form-control" name="contact" value="<?php echo set_value('contact') ?>">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>">
                            <?php } ?>
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                            <label>Confirm Password</label>
                            <input type="password" name="con_pass" class="form-control" value="<?php echo set_value('con_pass') ?>">
                            <label>Secret Question</label>
                            <select class="form-control" name="secret_q">
                                <?php
                                    $t = $this->db->get('secret_q')->result_array();
                                    foreach($t as $s)
                                    {
                                        ?>
                                    <option value="<?php echo $s['id'] ?>" <?php echo set_select('secret_q', $s['id']) ?>><?php echo $s['question'] ?></option>
                                <?php
                                    }
                                 ?>
                            </select>
                            <label>Answer</label>
                            <input type="text" class="form-control" name="answer_q" value="" required>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo ($this->session->has_userdata('id')) ? base_url('users') : base_url() ?>" class="btn btn-default pull-left margin-top-5px">Back</a>
                            <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Register">
                            <span class="clearfix"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
        $this->load->view('forms/login');
        $this->load->view('includes/footer');
    ?>
    <script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>

    <script type="text/javascript" src="/assets/js/login_register.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            <?php
                if ($this->session->flashdata('message')) {
            ?>
                $('#myModal').modal();
            <?php
                }
            ?>
        });
    </script>
</body>
</html>
