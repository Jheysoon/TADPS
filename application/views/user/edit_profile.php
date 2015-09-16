<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="well well-lg">
                    <form action="/edit_profile/<?php echo $id ?>" method="post" enctype="multipart/form-data">
                        <div class="fileinput fileinput-new center-block" style="margin-left:100px;" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                <img src="/assets/uploads/<?php echo $pic ?>" alt="" />
                            </div>
                            <div>
                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="userfile">
                                </span>
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <td>First Name</td>
                                <td><input type="text" class="form-control" name="fname" value="<?php echo $fname ?>"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input type="text" class="form-control" name="lname" value="<?php echo $lname ?>"></td>
                            </tr>
                            <tr>
                                <td>Middle Name</td>
                                <td><input type="text" class="form-control" name="mname" value="<?php echo $mname ?>"></td>
                            </tr>
                            <tr>
                              <td>Contact Number</td>
                              <td><input type="number" class="form-control" name="contact" value="<?php echo $contact ?>"></td>
                            </tr>
                            <?php if($this->session->userdata('type') == '') { ?>
                            <tr>
                              <td>Email Address</td>
                              <td><input type="email" class="form-control" name="email" value="<?php echo $email ?>"></td>
                            </tr>
                            <?php }
                            if($this->session->userdata('type') == 'ngo') { ?>
                            <tr>
                              <td>Office</td>
                              <td><input type="text" class="form-control" name="office" value="<?php echo $office ?>"></td>
                            </tr>
                            <?php } ?>
                        </table>
                        <input type="submit" value="Update" class="btn btn-primary btn-sm pull-right">
                        <span class="clearfix"></span>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
    <script src="/assets/js/jasny-bootstrap.min.js">

    </script>
</body>
</html>
