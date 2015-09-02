<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/outsidemenu'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well well-lg">
                  <?php if ($this->session->userdata('type') == 'admin'): ?>
                    <form class="" action="index.html" method="post">
                        <label>Government Agency</label>
                        <input type="text" name="office" class="form-control" value="">
                        <label>Contact No.</label>
                        <input type="text" name="number" class="form-control" value="">
                        <input type="submit" name="name" class="btn btn-primary pull-right margin-top-5px" value="Add" style="margin-bottom:10px;">
                        <span class="clearfix"></span>
                    </form>
                  <?php endif; ?>
                  <table class="table table-bordered">
                        <tr class="table_header">
                            <th>Government Agency</th>
                            <th>Contact</th>
                        </tr>
                        <?php
                            $h = $this->db->get('hotlines')->result_array();
                            foreach($h as $hotline)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php  echo $hotline['office']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotline['num'] ?>
                                    </td>
                                </tr>
                        <?php
                            }
                         ?>
                  </table>
                </div>
            </div>
        </div>
    </div>
    <?php
        $this->load->view('forms/login');
        $this->load->view('includes/footer');
     ?>
    <script type="text/javascript" src="/assets/js/login_register.js"></script>
</body>
