<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'hotline')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well well-lg">
                  <?php if ($this->session->userdata('type') == 'admin'): ?>
                    <form class="" action="<?php echo empty($id) ? '/hotline' : '/hotline/'.$id ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <label>Government Agency</label>
                        <input type="text" name="office" class="form-control" value="<?php echo $office ?>">
                        <label>Contact No.</label>
                        <input type="text" name="number" class="form-control" value="<?php echo $num ?>">
                        <input type="submit" name="name" class="btn btn-primary pull-right margin-top-5px" value="<?php echo empty($id) ? 'Add' : 'Save' ?>" style="margin-bottom:10px;">
                        <span class="clearfix"></span>
                    </form>
                  <?php endif; ?>
                  <table class="table table-bordered">
                        <tr class="table_header">
                            <th>Government Agency</th>
                            <th>Contact</th>
                            <th class="text-center">Action</th>
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
                                    <td>
                                        <a href="/hotline/<?php echo $hotline['id'] ?>" class="label label-info col-md-5">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="/hotline_delete/<?php echo $hotline['id'] ?>" onclick="return confirm('Are you sure to delete ?')" class="label label-danger col-md-5 col-md-offset-1">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                        <?php
                            }
                         ?>
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
