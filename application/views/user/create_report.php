<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'post')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <div style="max-width:300px;" class="center-block">
                        <form class="" action="index.html" method="post">
                            <input type="button" name="name" class="btn btn-primary center-block" value="Upload">
                            <label>Description</label>
                            <textarea name="name" class="form-control"></textarea>
                            <input type="submit" name="name" class="btn btn-primary pull-right margin-top-5px" value="Post">
                            <span class="clearfix"></span>
                        </form>
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
