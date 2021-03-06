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
                        <?php if ($this->session->userdata('type') == 'admin') { ?>
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form class="" action="index.html" method="post">
                                    <div id="message">
                                    </div>

                                    <div class="progress hide" id="prog">
                                        <div id="prog2" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            <span id="upload_percent"></span>
                                        </div>
                                    </div>
                                    <div style="width:200px;" class="center-block">

                                        <div class="fileUpload btn btn-primary btn-block">
                                            <span class="glyphicon glyphicon-paperclip"></span>&nbsp;Upload a video
                                            <input type="file" name="userfile" id="userfile" class="upload" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <?php
                                                $a = $this->announce->latest();
                                                $this->db->where('id', $a['user']);
                                                $r = $this->db->get('users')->row_array();
                                            ?>
                                            <img class="media-object" style="max-width:120px;" src="/assets/uploads/<?php echo $r['pic'] ?>" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Announcement</h4>
                                    <?php echo auto_typography($a['message']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="/view_prev" class="btn btn-primary btn-sm pull-right">View Previous Announcement</a>
                        <span class="clearfix"></span>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[name=userfile]').change(function(){
                $('#message').html(' ');
                var file    = document.getElementById('userfile').files[0];
                var ext     = [".mp4", "avi", "wmv"];
                var valid   = false;
                var inp     = document.getElementById('userfile');
                if(inp.type == 'file')
                {
                    var filename = inp.value;
                    if(filename.length > 0)
                    {
                        for(var j = 0; j < ext.length; j++)
                        {
                            var curExt = ext[j];
                            var e = filename.substr(filename.length - curExt.length, curExt.length).toLowerCase();
                            //alert(e);
                            if(e == curExt.toLowerCase())
                            {
                                valid = true;
                                break;
                            }
                        }
                    }
                }
                if(valid)
                {
                    var file_size = file.size / 1024 / 1024;
                    if(file_size <= 10)
                    {
                        var formdata = new FormData();

                        formdata.append('file', file);
                        var ajax = new XMLHttpRequest();
                        ajax.open('POST', '/upload_vid');
                        ajax.send(formdata);

                        ajax.upload.addEventListener('progress', function(event){
                            var percent = (event.loaded / event.total) * 100;
                            //console.log(Math.round(percent));
                            console.log(event);
                            percent = Math.round(percent) + '%';
                            $('#prog').removeClass('hide');
                            $('#prog2').css('width', percent);
                            //$('#upload_percent').html(percent+' Complete');
                        }, false);
                        ajax.addEventListener('load', function(data){
                            $('#prog').addClass('hide');
                            $('#message').html('<div class="alert alert-success">Successfully Uploaded</div>');
                        }, false);
                        ajax.addEventListener('error', function(data){
                            $('#message').html('<div class="alert alert-danger">Something went wrong</div>');
                        }, false);
                        ajax.addEventListener('abort', function(data){
                            $('#message').html('<div class="alert alert-danger">Something went wrong</div>');
                        }, false);
                    }
                    else {
                        $('#message').html('<div class="alert alert-danger text-center">File size exceeds <br/> Please upload a file less than 10MB</div>');
                    }
                }
                else {
                    $('#message').html('<div class="alert alert-danger text-center">Not a valid file type ..<br/> Valid file types are .mp4, .avi, .wmv</div>');
                }
            });
        });
    </script>
</body>
</html>
