<?php $this->load->view('includes/header') ?>
<body>

    <?php $this->load->view('includes/menu', array('active' => 'users')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <span class="clearfix"></span>
                    <br/>
                    <a href="/register" class="btn btn-primary pull-right">Add New User</a>
                    <table class="table">
                        <tr class="table_header">
                            <th>Name</th>
                            <th>Office</th>
                        </tr>
                        <tr>
                            <td>
                                Jude Wanda Deguito
                            </td>
                            <td>
                                Red Cross
                            </td>
                        </tr>
                        <!-- <?php
                            $this->db->where('type !=', 'admin');
                            $u = $this->db->get('users')->result_array();
                            foreach($u as $users)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $users['fname'].' '.$users['lname'].' '.$users['mname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $users['office'] ?>
                                    </td>
                                </tr>
                        <?php
                            }
                         ?> -->
                    </table>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
