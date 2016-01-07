<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Help</h3>
                    </div>
                    <div class="card-block">
                        <h4>Create New Announcement</h4>
                        <p class="card-text">
                            To go to create a new announcement. Click on post 
                            and you will see this page below.
                        </p>
                    </div>
                    <img src="/assets/img/post.png" class="card-img" alt="" />
                    <div class="card-block">
                        <p class="card-text">
                            Just enter a text and hit Post button
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>