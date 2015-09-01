<?php $this->load->view('includes/header') ?>
<body>
    <?php $this->load->view('includes/menu', array('active' => 'hotline')) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-lg">
                    <h2 class="text-center">Hotline Numbers <span class="glyphicon glyphicon-earphone"></span></h2>
                    <table class="table">
                        <tr>
                            <th class="text-center">
                                Name Of the Office
                            </th>
                            <th class="text-center">
                                Contact No.
                            </th>
                        </tr>
                        <tr class="text-center">
                            <td>
                                CDRRMO
                            </td>
                            <td>
                                09091234567
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
