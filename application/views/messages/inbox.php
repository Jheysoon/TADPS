<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'messages')) ?>
    <div class="container-fluid">

      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">Messages</h4>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row" style="padding:0">
                        <div class="col-md-4" style="padding:0;margin:0">
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
                                                    <textarea name="message" class="form-control"  style="height:50px;width:100%;padding-right:10px;padding-left:10px;resize:none"></textarea>
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
    </div>
    <?php $this->load->view('includes/footer') ?>
    <script type="text/javascript">
        var $user = 0;
        $(document).ready(function(){
            $('.chat_user').click(function(e){
                $user = $(this).data('user');
                $('input[name=user_to]').val($user);

                //get name
                $.post('/messages/getName', {user:$user}, function(data){
                    $('#user_name').html(data);
                });

                getMessages();
                e.preventDefault();
            });

            function getMessages()
            {
                //get messages
                $.post('/messages/chat', {user:$user}, function(data) {
                    $('#message_body').html(data);
                    delete_conv();
                });
            }

            $('.chat_form').submit(function(e){
                $.post('/messages/form', $(this).serialize(), function(data){
                    $('#message_body').html(data);
                    $('textarea[name=message]').val('');
                });
                e.preventDefault();
            });

            setInterval(function(){
                if($user != 0)
                {
                    getMessages();
                }
            },4500);

            function delete_conv() {
                $('.delete_conversation').on('click', function(e){
                    $val = $(this).data('param');
                    $.post('/messages/delete_conversation', {id:$val}, function(){
                        getMessages();
                    });
                    e.preventDefault();
                });
            }
        });
    </script>
</body>
</html>
