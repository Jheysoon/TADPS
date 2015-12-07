<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/outsidemenu') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="card" style="background-color: #FFF;">
                    <form action="/forgot_password" method="post">
                        <div class="card-header">
                            <h3 class="text-center">Forgot Password</h3>
                        </div>
                        <div class="card-block">

                            <?php echo $error ?>

                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" autofocus>
                            <label>Secret Question</label>
                            <select class="form-control" name="secret_q">
                                <?php
                                    $i = $this->db->get('secret_q')->result_array();
                                    foreach($i as $ii)
                                    {
                                        ?>
                                    <option value="<?php echo $ii['id'] ?>" <?php echo set_select('secret_q', $ii['id']) ?>><?php echo $ii['question'] ?></option>
                                <?php
                                    }
                                 ?>
                            </select>
                            <label>Answer</label>
                            <input type="text" name="answer" class="form-control" value="<?php echo set_value('answer') ?>">
                            <label>New Password</label>
                            <input type="text" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                        </div>
                        <div class="card-footer" style="background-color: #FFF;">
                            <input type="submit" name="name" class="btn btn-primary pull-right" value="Submit">
                            <span class="clearfix"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        $this->load->view('includes/footer');
        $this->load->view('forms/login');
        $this->load->view('forms/registration');
    ?>
    <script type="text/javascript" src="/assets/js/login_register.js"></script>
</body>
</html>
