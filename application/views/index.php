<?php $this->load->view('includes/header') ?>
<body id="no_scroll">
<?php
    $this->load->view('includes/outsidemenu');
 ?>
    <!-- Navigation -->
  <!--Videos and Links  -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="height:340px;">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;Weather</h4></div>
                <div class="panel-body">
                    <div class="" style="">
                        <a href="http://www.accuweather.com/en/ph/tacloban-city/264004/weather-forecast/264004" class="aw-widget-legal"></a>
                        <div id="awtd1440249309919" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awtd1440249309919" data-editlocation="true"></div>
                        <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                    </div>
                </div>
            </div>
            <br /><br />
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row well" style="min-height:200px;">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="fa fa-newspaper-o"></span>
                                &nbsp;&nbsp;Announcement
                            </h4>
                        </div>
                        <div class="panel-body">
                            <?php
                                $a = $this->announce->latest();
                                if(strlen($a['message']) > 50)
                                {
                                    echo character_limiter($a['message'], 50);
                                    ?>
                                    <a href="#" data-toggle="modal" data-target="#announcement">See More</a>
                            <?php
                                }
                            ?>
                            <br>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="fa fa-empire fa-lg"></span>
                                <a href="#" class="btn btn-link" data-toggle="modal" data-target="#gov_agencies">
                                    <strong>Government Agencies</strong>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="fa fa-video-camera"></span>
                                &nbsp;&nbsp;Video
                            </h4>
                        </div>
                        <div class="panel-body">
                            <a href="#" data-toggle="modal" data-target="#videos">View More</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
        $this->load->view('modals/video');
        $this->load->view('modals/announcement');
        $this->load->view('modals/gov_agencies');
        $this->load->view('forms/login');
        $this->load->view('forms/registration');
        $this->load->view('includes/footer');
    ?>
    <script type="text/javascript" src="/assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: false
            });
            $('#button').click(function(){
               $("input[type='file']").trigger('click');
            });

            $("input[type='file']").change(function(){
               $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
            });
        });
    </script>
    <script type="text/javascript" src="/assets/js/login_register.js"></script>
</body>
</html>
