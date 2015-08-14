<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'home')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <img src="/assets/img/pagasa.png" class="img-thumbnail" alt="" />
                    <h2 class="text-center"><a href="http://www.pagasa.dost.gov.ph" target="_blank">PAGASA OFFICIAL WEBSITE</a></h2>
                    <hr>
                    <img src="/assets/img/phivolcs.png" class="img-thumbnail" alt="" />
                    <h3 class="text-center"><a href="http://www.phivolcs.dost.gov.ph" target="_blank">PHIVOLCS OFFICIAL WEBSITE</a></h3>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
