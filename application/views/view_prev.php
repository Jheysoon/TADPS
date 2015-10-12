<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/outsidemenu') ?>

    <div class="container-fluid">
        <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <div class="well well-lg">
                    <ul class="media-list">
                        <?php
                            $a = $this->db->query('SELECT * FROM announcement ORDER BY id DESC')->result_array();
                            foreach($a as $aa)
                            {
                                $u = $this->db->get_where('users', array('id' => $aa['user']))->row_array();
                         ?>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img style="max-width:120px;" class="media-object" src="/assets/uploads/<?php echo $u['pic'] ?>" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Announcement</h4>
                                <?php echo auto_typography($aa['message']) ?>
                                <?php echo $aa['ttime'].' '.$aa['date'] ?>
                            </div>
                        </li>
                      <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
