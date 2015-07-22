<?php $this->load->view('includes/header') ?>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">TADPS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>TADPS</h1>
                        <hr class="intro-divider">
                        <h4>Tacloban Awareness And Disaster Preparedness System</h4>
                        <a href="/subcribe" class="btn btn-primary btn-lg">Subscribe to Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="background-color:red;">
                    Headlines
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>

</body>
</html>
