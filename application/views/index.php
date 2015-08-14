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
                    <li>
                        <a href="/register">Register</a>
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
                    <div class="intro-message" style="color:#000;">
                        <h1></h1>

                        <hr class="intro-divider">
                        <h4></h4>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/img/pagasa.png" class="img-thumbnail" alt="" />
                <h3 class="text-center"><a href="http://www.pagasa.dost.gov.ph" target="_blank">PAGASA OFFICIAL WEBSITE</a></h3>
            </div>
            <div class="col-md-6">
                <img src="/assets/img/phivolcs.png" class="img-thumbnail" alt="" />
                <h3 class="text-center"><a href="http://www.phivolcs.dost.gov.ph" target="_blank">PHIVOLCS OFFICIAL WEBSITE</a></h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img src="/assets/img/flood.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="/assets/img/lique.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="/assets/img/ground.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="/assets/img/tsunami.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/storm_surge.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-4">
                <img src="/assets/img/landslide.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-4">
                <img src="/assets/img/earthquake.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="text-center">Hotline Numbers <span class="glyphicon glyphicon-earphone"></span></h2>
                    <table class="table">
                        <tr>
                            <th class="text-center">
                                Name Of the Office
                            </th>
                            <th class="text-center">
                                Contact No.
                            </th>
                        </tr>
                        <tr class="text-center">
                            <td>
                                CDRRMO
                            </td>
                            <td>
                                09091234567
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>

</body>
</html>
