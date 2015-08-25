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
                      <form class="" action="index.html" method="post">
                          <textarea style="width:100%;resize:none" placeholder="Enter Your Announcement Here...." class="form-control"></textarea>
                          <input type="submit"  class="btn btn-success pull-right" name="name" value="Post" style="margin-top:10px">
                          <div class="fileUpload btn btn-primary pull-right">
                              <span class="glyphicon glyphicon-paperclip"></span>
                              <input type="file" class="upload" />
                          </div>
                      </form>
                    </div>
                    <div class="col-md-12" style="margin-top:20px">
                      <small>Date: <?php echo Date('Y-m-d') ?></small>
                        <p style="text-align:justify; text-indent:30px;">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          <center><img src="../assets/img/dog.png" alt="" style="width:150px;text-align:center"/>
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




























            <!-- <div class="col-md-6">
                <div class="well well-lg">
                    <a href="/add_post" class="btn btn-primary pull-right">Add Post</a>
                    <span class="clearfix"></span>
                    <ul class="media-list margin-top-5px">
                      <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object profile_pic" src="/assets/uploads/dog.png" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Ezekiel Joseph Tan</h4>
                            Relief operation in quarry district
                            <br><br>
                            <?php if($this->session->userdata('type') == 'admin'){ ?>
                            <div class="pull-right">
                                <a href="#" class="btn btn-primary btn-xs">View</a>
                                | <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                    | <a href="#" class="btn btn-primary btn-xs">Post</a>

                            </div>
                            <?php } ?>
                        </div>
                      </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
