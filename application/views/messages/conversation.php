<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'messages')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Mary Jude Wanda Deguito</h3>
                        </div>
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
                        <div class="panel-footer">
                            <textarea name="name" class="form-control"></textarea>
                            <input type="submit" class="btn btn-primary pull-right margin-top-5px" name="name" value="Send">
                            <span class="clearfix"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
