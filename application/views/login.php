<?php $this->load->view('includes/header') ?>
<body>
    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div>
                        <form action="/post_login" class="center-block" method="post" style="max-width:300px;">
                            <input type="text" class="form-control input-sm" name="username" placeholder="Username">
                            <input type="text" class="form-control input-sm margin-top-5px" name="password" placeholder="Password">
                            <input type="button" class="btn btn-primary btn-sm pull-right margin-top-5px" name="btnSubmit" value="Login">
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
