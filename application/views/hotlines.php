<?php $this->load->view('includes/header') ?>
<body>
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
                          <!-- <th>Action</th> -->
                      </tr>
                      <tr>
                          <td>
                              Red Cross
                          </td>
                          <td>
                            0909090900
                          </td>
                          <!-- <td>
                            <a href="#" class="label label-info">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
                            <a href="#" class="label label-danger">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                          </td> -->
                      </tr>
                      <tr>
                          <td>
                              Philippine National Police Tacloban City
                          </td>
                          <td>
                            0912345670
                          </td>
                          <!-- <td>
                            <a href="#" class="label label-info">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
                            <a href="#" class="label label-danger">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                          </td> -->
                      </tr>
                      <tr>
                          <td>
                              BUREAU OF FIRE AND PROTECTION
                          </td>
                          <td>
                            321-2223
                          </td>
                          <!-- <td>
                            <a href="#" class="label label-info">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
                            <a href="#" class="label label-danger">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                          </td> -->
                      </tr>


                  </table>
                </div>
                <div class="col-md-12">

                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
