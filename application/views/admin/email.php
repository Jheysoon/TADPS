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
                              <th>
                                  Action
                              </th>
                          </tr>
                          <tr>
                              <td>
                                  Mary Jude Wanda Deguito
                              </td>
                              <td>
                                  jude@gmail.com
                              </td>
                              <td>
                                  <a href="/" class="btn btn-danger btn-xs btn-block">Delete</a>
                              </td>
                          </tr>
                      </table>
                  </div>
                </div>


            </div>

        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
