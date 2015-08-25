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
                          <button type="button" style="margin-bottom:10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Compose</button>
                          <ul class="list-group">
                              <a href="/conversation/1" class="list-group-item">CDRRMO <span class="badge">1</span></a>
                              <!-- <a href="#" class="list-group-item">Lea Nerza <span class="badge">5</span></a>
                              <a href="#" class="list-group-item">Mary Joy Octavio <span class="badge">10</span></a> -->


                          </ul>
                        </div>
                        <div class="col-md-8">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo"><h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;CDRRMO</h3></div>
                              <div class="panel-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="panel-body" id="message_body">
                                        <div class="">
                                            <div class="convo_left">
                                                hello world
                                            </div>
                                            <div class="tip_left"></div>
                                        </div>
                                        <div class="">
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
                                        <br>
                                        <div class="">
                                            <div class="convo_right text-right">
                                                <a href="#" class="close pull-left">&times;</a>
                                                hello world
                                            </div>
                                            <div class="tip_right pull-right"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                      <form class="" action="index.html" method="post">
                                        <textarea name="name" class="form-control"  style="height:50px;width:100%;padding-right:10px;padding-left:10px;resize:none"></textarea>
                                          <input type="submit" name="name" class="btn btn-info pull-right" value="Send" style="margin-top:10px">
                                          <div class="fileUpload btn btn-primary pull-right">
                                              <span class="glyphicon glyphicon-paperclip"></span>
                                              <input type="file" class="upload" />
                                          </div>
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








                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
                                          </div>




        <!-- <div class="row">
            <div class="col-md-12">
                <div class="well well-lg">
                    <a href="#" class="btn btn-primary pull-right">Compose Message</a>
                    <span class="clearfix"></span>

                    <ul class="list-group margin-top-5px">
                        <a href="/conversation/1" class="list-group-item">Mary Jude Wanda Deguito <span class="badge">1</span></a>
                        <a href="#" class="list-group-item">Lea Nerza <span class="badge">5</span></a>
                        <a href="#" class="list-group-item">Mary Joy Octavio <span class="badge">10</span></a>
                    </ul>
                </div>
            </div> -->


        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>