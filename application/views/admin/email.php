<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'email')) ?>
    <div class="container-fluid">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <div class="panel-heading"><h3 class="panel-title">List of Emails</h3></div>
                  <div class="panel-body">
                    <table class="table table-bordered">
                          <tr class="table_header">
                              <th>Name</th>
                              <th>Email Address</th>
                              <th>Password</th>
                              <th>
                                  Action
                              </th>
                          </tr>
                          <?php
                                $this->db->where('type', '');
                                $e = $this->db->get('users')->result_array();
                                foreach($e as $email)
                                {
                                    ?>
                                <tr>
                                    <td>
                                        <?php echo $email['fname'].' '.$email['lname'].' '.$email['mname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $email['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $email['password'] ?>
                                    </td>
                                    <td>
                                        <a href="/delete_email/<?php echo $email['id'] ?>" onclick="return confirm('Are you sure to delete ?')" class="btn btn-danger btn-block btn-sm">Delete</a>
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
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
