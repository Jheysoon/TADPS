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
                        <?php
                            $h = $this->db->get('hotlines')->result_array();

                            foreach ($h as $hotline) {
                                ?>
                            <tr class="text-center">
                                <td>
                                    <?php  echo $hotline['office']; ?>
                                </td>
                                <td>
                                    <?php echo $hotline['num'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
