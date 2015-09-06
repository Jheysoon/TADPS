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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
