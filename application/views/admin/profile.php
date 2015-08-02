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
                    </table>

                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
