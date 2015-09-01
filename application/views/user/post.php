<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'post')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">Announcements</h4>
                    </div>
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form class="" action="/post" method="post" enctype="multipart/form-data">
                                    <?php echo $error ?>
                                    <textarea style="resize:vertical" name="post" placeholder="Enter Your Announcement Here...." class="form-control"><?php echo set_value('post') ?></textarea>
                                    <input type="submit" class="btn btn-success pull-right" name="name" value="Post" style="margin-top:10px">
                                    <div class="fileUpload btn btn-primary pull-right">
                                        <span class="glyphicon glyphicon-paperclip"></span>
                                        <input type="file" name="attachment" class="upload" />
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12" style="margin-top:20px">
                                <div class="alert alert-info">
                                    Latest Announcement
                                </div>
                                <small>Date: <?php echo Date('Y-m-d') ?></small>
                                <!-- use getui overlay -->
                                <p style="text-align:justify; text-indent:30px;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <center>
                                        <img src="../assets/img/dog.png" alt="" style="width:150px;text-align:center"/>
                                    </center>
                                </p>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
