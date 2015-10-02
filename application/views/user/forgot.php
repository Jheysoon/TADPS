<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/outsidemenu') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php echo $error ?>
                <form action="/forgot_password" method="post" style="border:2px solid #1A237E; padding:5px; border-radius:5px;">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
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
                    <input type="submit" name="name" class="btn btn-primary pull-right margin-top-5px" value="Submit">
                    <span class="clearfix"></span>
                </form>
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
