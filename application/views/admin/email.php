<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'email')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="well well-lg">
                    <table class="table">
                        <tr>
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
                                <a href="/" class="btn btn-danger btn-xs">Delete</a>
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
