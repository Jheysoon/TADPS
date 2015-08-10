<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'post')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <a href="/add_post" class="btn btn-primary pull-right">Add Post</a>
                    <span class="clearfix"></span>
                    <table class="table margin-top-5px">
                        <tr>
                            <th>
                                About
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Relive operation in quarry district
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-xs">View</a>
                                | <a href="#" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
