<?php $this->load->view('includes/header') ?>
<body>

    <?php $this->load->view('includes/menu', array('active' => 'users')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well well-lg">
                    <span class="clearfix"></span>
                    <br/>
                    <?php echo $error; ?>
                    <form class="form-horizontal" action="/users" method="post">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Firstname</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="fname" value="<?php echo set_value('fname') ?>" autofocus>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Lastname</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="lname" value="<?php echo set_value('lname') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"> Middlename</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="mname" value="<?php echo set_value('mname') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Office</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="office" value="<?php echo set_value('office') ?>">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="padding-left:0;padding-right:0">Contact Number</label>
                              <div class="col-sm-8">
                                <input type="number" class="form-control" maxlength="11" name="contact" value="<?php echo set_value('contact') ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="padding-left:0;padding-right:0">Username</label>
                              <div class="col-sm-8">
                                <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="padding-left:0;padding-right:0">Password</label>
                              <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="padding-left:0;padding-right:0">Confirm Password</label>
                              <div class="col-sm-8">
                                <input type="password" name="con_pass" class="form-control" value="<?php echo set_value('con_pass') ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3">&nbsp;</label>
                              <div class="col-sm-9" style="margin-top:-15px">
                                    <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Register">
                              </div>
                            </div>
                        </div>

                    </form>
                    <table class="table table-bordered">
                        <tr class="table_header">
                            <th class="text-center">Name</th>
                            <th class="text-center">Office</th>
                            <th class="text-center">Contact</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php
                            $this->db->where('type', 'ngo');
                            $u = $this->db->get('users')->result_array();
                            foreach($u as $users)
                            {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo $users['fname'].' '.$users['lname'].' '.$users['mname'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $users['office'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $users['contact'] ?>
                                    </td>
                                    <td>
                                      <a href="" class="label label-info col-sm-5">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
                                      <a href="/delete_user/<?php echo $users['id']; ?>" class="delete label label-danger col-sm-5 col-sm-offset-1">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
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
        $(document).ready(function(){
            $('.delete').click(function(){
                return confirm('Are you sure you want to delete ?');
            });
        });
    </script>
</body>
</html>
