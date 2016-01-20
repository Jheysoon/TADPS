<?php $this->load->view('includes/header') ?>
<body>
<?php $this->load->view('includes/menu', array('active' => '')) ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card" style="background-color: #fff;">
                    <iframe class= "card-img-top" height="400" frameborder="0" style="width:100%;"
                      src="https://www.google.com/maps/embed/v1/directions?origin=<?php echo $lat ?>,<?php echo $long ?>&destination=Tacloban City Hall&key=AIzaSyCQsaQYMeegD3H-wv6149gnnKWezQXQ4MU" allowfullscreen style="overflow:auto"></iframe>
                     </iframe>
                    <div class="card-header" style="margin-top:-5px;">
                        <h3 class="card-title text-center">List Of Locations</h3>
                    </div>
                    <div class="card-block">
                        <table class="table table-bordered">
                            <tr>
                                <td>Location</td>
                                <td class="text-center">Action</td>
                            </tr>
                            <tr>
                                <td>
                                    Burgos St.
                                </td>
                                <td>
                                    <a href="<?php echo '/locator/11.244072/124.999341' ?>" class="btn btn-primary btn-sm btn-block">Locate</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    M.H. Del Pilar St.
                                </td>
                                <td>
                                    <a href="<?php echo '/locator/11.243967/125.002195' ?>" class="btn btn-primary btn-sm btn-block">Locate</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    EVRMC
                                </td>
                                <td>
                                    <a href="<?php echo '/locator/11.250954/125.004426' ?>" class="btn btn-primary btn-sm btn-block">Locate</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        <br>
        <br>
        <br>
    </div>
    <?php
        $this->load->view('forms/login');
        $this->load->view('includes/footer');
    ?>
<script type="text/javascript" src="/assets/js/login_register.js"></script>
</body>
</html>
