<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'messages')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <a href="#" class="btn btn-primary pull-right">Compose Message</a>
                    <span class="clearfix"></span>

                    <ul class="list-group margin-top-5px">
                        <a href="/conversation/1" class="list-group-item">Mary Jude Wanda Deguito <span class="badge">1</span></a>
                        <a href="#" class="list-group-item">Lea Nerza <span class="badge">5</span></a>
                        <a href="#" class="list-group-item">Mary Joy Octavio <span class="badge">10</span></a>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
