<?php $this->load->view('includes/header') ?>
<body>
    <div class="content-section-c">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div>
                        <form action="/subscribe" class="center-block" method="post" style="max-width:300px;">
                            <input type="text" class="form-control input-lg" name="name" value="<?php echo set_value('name'); ?>" autofocus placeholder="Your name">
                            <input type="email" class="form-control input-lg margin-top-5px" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address">
                            <a href="<?php echo base_url(); ?>" class="btn btn-default btn-sm margin-top-5px">Back</a>
                            <input type="submit" class="btn btn-primary btn-sm pull-right margin-top-5px" name="btnSubmit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
