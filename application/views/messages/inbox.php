<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'messages')) ?>
    <div class="container-fluid">

      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title">Messages</h4></div>
              <div class="panel-body">
                <div class="container-fluid">
                    <div class="row" style="padding:0">
                        <div class="col-md-4" style="padding:0;margin:0">
                            <!-- <button type="button" style="margin-bottom:10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Compose</button> -->
                            <ul class="list-group">
                                <?php
                                    if($this->session->userdata('type') == 'admin')
                                    {
                                        $this->db->where('type !=', 'admin');
                                    }
                                    elseif($this->session->userdata('type') == 'ngo')
                                    {
                                        $this->db->where('type', 'admin');
                                        $this->db->or_where('type', 'ngo');
                                    }
                                    else
                                    {
                                        $this->db->where('type', 'admin');
                                    }
                                    $r = $this->db->get('users')->result_array();
                                    foreach ($r as $user)
                                    {
                                    ?>
                                <a href="#" data-user="<?php echo $user['id'] ?>" class="list-group-item chat_user">
                                    <?php
                                        $office = '';
                                        if(! empty($user['office']))
                                        {
                                            $office = '('.$user['office'].')';
                                        }
                                        echo $user['fname'].' '.$user['lname'].' '.$office;
                                     ?>
                                </a>
                                <?php
                                    }
                                 ?>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span>
                                        <span id="user_name">Please select a user</span>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="panel-body" id="message_body">
                                                <!-- <div class="">
                                                    <div class="convo_left">
                                                        hello world
                                                    </div>
                                                    <div class="tip_left"></div>
                                                </div>
                                                <div class="">
                                                    <div class="convo_right text-right">
                                                        <a href="#" class="close pull-left">&times;</a>
                                                        hello world
                                                    </div>
                                                    <div class="tip_right pull-right"></div>
                                                </div>
                                                <br> -->

                                            </div>
                                            <div class="col-md-12">
                                              <form class="" action="/" method="post">
                                                <textarea name="name" class="form-control"  style="height:50px;width:100%;padding-right:10px;padding-left:10px;resize:none"></textarea>
                                                <input type="submit" name="name" class="btn btn-info pull-right" value="Send" style="margin-top:10px">
                                                  <!-- <div class="fileUpload btn btn-primary pull-right">
                                                      <span class="glyphicon glyphicon-paperclip"></span>
                                                      <input type="file" class="upload" />
                                                  </div> -->
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
              </div>
                <hr>
            </div>

      </div>

          <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Compose message</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Recipient:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="control-label">Message:</label>
                      <textarea class="form-control" id="message-text"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>
                </div>
              </div>
            </div>
          </div> -->

        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
