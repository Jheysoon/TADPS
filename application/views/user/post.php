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
                        <hr>
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form class="" action="index.html" method="post">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                    <div style="width:200px;" class="center-block">

                                        <div class="fileUpload btn btn-primary btn-block">
                                            <span class="glyphicon glyphicon-paperclip"></span>&nbsp;Uplaod a video
                                            <input type="file" name="attachment" class="upload" />
                                        </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[name=attachment]').click(function(){
                var file = $(this).files[0];

                var formdata = new FormData();

                formdata.append('file', file);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener('progress',function(){

                }, false);
                ajax.addEventListener('load',function(){

                }, false);
                ajax.addEventListener('error',function(){

                }, false);
                ajax.addEventListener('abort',function(){

                }, false);
            });
        });
    </script>
</body>
</html>
