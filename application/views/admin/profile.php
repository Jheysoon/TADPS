<?php $this->load->view('includes/header') ?>
<body>

    <?php $this->load->view('includes/menu', array('active' => 'profile')) ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #fff;">
                    <img src="/assets/uploads/<?php echo $pic ?>" class="card-img-top" style="width: 100%;" alt="" />
                    <div class="card-block">
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td><?php echo $fname.' '.$mname.' '.$lname ?></td>
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
                            <tr>
                                <td>Birthday</td>
                                <td>
                                    <?php
                                        $month  = array('January', 'February', 'March', 'April',
                                                    'May', 'June', 'July', 'August', 'September',
                                                    'October', 'November', 'December');
                                        $day    = explode('-', $bday);
                                        $m      = (int) ($day[1] - 1);
                                        echo $month[$m].' '.$day[2].', '.$day[0];
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>
                                    <?php
                                        $age    = diff($bday);
                                        $concat = $age > 1 ? 's':'';
                                        echo $age.' yr'.$concat.'. old';
                                     ?>
                                </td>
                            </tr>
                            <?php if ($this->session->userdata('type') == '') { ?>
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
                    </div>
                    <div class="card-footer" style="background-color: #FFF;">
                        <a href="/edit_profile/<?php echo $id ?>" class="btn btn-info btn-sm pull-right">Edit profile</a>
                        <span class="clearfix"></span>
                    </div>
                </div>
                <br><br><br>
            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
