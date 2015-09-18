<?php $this->load->view('includes/header') ?>
<body>

    <?php $this->load->view('includes/menu', array('active' => 'profile')) ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <img src="/assets/uploads/<?php echo $pic ?>" style="max-width:120px;" class="img-responsive center-block" alt="" />
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td><?php echo $fname.' '.$lname.' '.$mname ?></td>
                        </tr>
                        <tr>
                          <td>Contact Number</td>
                          <td><?php echo $contact ?></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td><?php echo ($gender == 1) ? 'Male' : 'Female'; ?></td>
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td><?php echo $address ?></td>
                        </tr>
                        <?php if($this->session->userdata('type') == '') { ?>
                        <tr>
                          <td>Email Address</td>
                          <td><?php echo $email ?></td>
                        </tr>
                        <?php } if($this->session->userdata('type') == 'ngo') { ?>
                        <tr>
                          <td>Office</td>
                          <td><?php echo $office ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <a href="/edit_profile/<?php echo $id ?>" class="btn btn-info btn-sm pull-right">Edit profile</a>
                    <span class="clearfix"></span>

                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
