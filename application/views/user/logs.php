<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => '')) ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-lg">
                    <div class="pull-right">
                        <form class="form-inline" action="/" method="post">
                            <label>Search:</label>
                            <input type="text" class="form-control" style="max-width:100px;" name="user" value="">
                            <label>From:</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" style="max-width:120px;" name="date_from" value="">
                            <label>To:</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" style="max-width:120px;" name="date_to" value="">
                            <input type="submit" class="btn btn-primary btn-sm" name="name" value="Search">
                        </form>
                    </div>
                    <span class="clearfix"></span>
                    <br><br>
                    <table class="table">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Activity</th>
                            <th>User</th>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-inline').submit(function(e) {

                $.post('/users/get_logs', $(this).serialize(), function (data) {
                    $('.table').html(data);
                });
                e.preventDefault();
            });
        });
    </script>
</body>
</html>
