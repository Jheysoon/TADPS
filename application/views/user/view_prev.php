<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>

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
                                <h4 class="media-heading">Announcement from:<?php echo $this->session->userdata('id') == $u['id'] ? 'You' : $u['fname'].' '.$u['lname'] ?></h4>
                                <?php
                                    echo auto_typography($aa['message']);
                                    echo $aa['ttime'].' '.$aa['date'];
                                    if ($this->session->userdata('type') == 'admin') {
                                        ?>
                                    <br>
                                    <a href="/delete_annouce/<?php echo $aa['id'] ?>" onclick="return confirm('Are you to delete')" class="btn btn-danger btn-sm pull-right">Delete</a>
                                <?php
                                    }
                                 ?>
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
