<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-lg">
                    <table class="table">
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Time
                            </th>
                            <th>
                                Activity
                            </th>
                            <th>
                                User
                            </th>
                        </tr>
                        <?php
                            $l = $this->db->get('logs')->result_array();
                            foreach($l as $logs)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $logs['ddate'] ?>
                                    </td>
                                    <td>
                                        <?php echo $logs['ttime'] ?>
                                    </td>
                                    <td>
                                        <?php echo $logs['activity']; ?>
                                    </td>
                                    <td>
                                        <?php
                                            $u = $this->db->get_where('users', array('id' => $logs['user']))->row_array();
                                            echo $u['fname'].' '.$u['lname'];
                                         ?>
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
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
