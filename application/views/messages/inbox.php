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
                            <?php $this->load->view('messages/users') ?>
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

                                            </div>
                                            <div class="col-md-12">
                                                <form class="chat_form" action="/" method="post">
                                                    <input type="hidden" name="user_to" value="">
                                                    <input type="hidden" name="user_from" value="<?php echo $this->session->userdata('id') ?>">
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.chat_user').click(function(){
                $user = $(this).data('user');
                $('input[name=user_to]').val($user);

                //get name
                $.post('/messages/getName', {user:$user}, function(data){
                    $('#user_name').html(data);
                });

                //get messages
                $.post('/messages/chat', {user:$user}, function(data) {
                    $('#message_body').html(data);
                });
            });
        });
    </script>
</body>
</html>
