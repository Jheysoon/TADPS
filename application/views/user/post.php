<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'post')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <a href="/add_post" class="btn btn-primary pull-right">Add Post</a>
                    <span class="clearfix"></span>
                    <ul class="media-list margin-top-5px">
                      <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object profile_pic" src="/assets/uploads/dog.png" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Jude Wanda Deguito</h4>
                            Relief operation in quarry district
                            <br><br>
                            <?php if($this->session->userdata('type') == 'admin'){ ?>
                            <div class="pull-right">
                                <a href="#" class="btn btn-primary btn-xs">Confirm</a>
                                | <a href="#" class="btn btn-danger btn-xs">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
