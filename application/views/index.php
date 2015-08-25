<?php $this->load->view('includes/header') ?>
<body>
  <?php
    $this->load->view('includes/outsidemenu');
   ?>
    <!-- Navigation -->
  <!--Videos and Links  -->

<div class="contaner-fluid">
  <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Videos</h4></div>
            <div class="panel-body">
          	<div id="myCarousel" class="carousel slide" style="height: 460px;">
          		<div class="carousel-inner">
          			<div class="item active">
                  <video width="100%" height="500px" src="/assets/uploads/v5.mp4" controls preload="none" poster="posterimage.jpg" allowfullscreen=""></video>
          			</div>
          			<div class="item">
                  <video width="100%" height="500px" src="/assets/uploads/v4.mp4" controls preload="none" poster="posterimage.jpg" allowfullscreen=""></video>

          				</div>
          			<div class="item">
                  <video width="100%" height="500px" src="/assets/uploads/v3.mp4" controls preload="none" poster="posterimage.jpg" allowfullscreen=""></video>

          				</div>
          		</div>
          		<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          		<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
          	</div>
            <br /><br />
            </div>
          </div>


          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Announcement</h4></div>
                <div class="panel-body">
                  <small>Date&nbsp;:&nbsp;<?php echo Date('Y-m-d'); ?></small>
                  <p style="text-indent: 30px;text-align:justify;margin:10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                     pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
              </div>


              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title">Govenment Agency</h4></div>
                    <div class="panel-body">

                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-6">
                                  <img src="/assets/img/pagasa.png" class="img-thumbnail" alt="" />
                                  <h3 class="text-center"><a href="http://www.pagasa.dost.gov.ph" target="_blank">PAGASA OFFICIAL WEBSITE</a></h3>
                              </div>
                              <div class="col-md-6">
                                  <img src="/assets/img/phivolcs.png" class="img-thumbnail" alt="" />
                                  <h3 class="text-center"><a href="http://www.phivolcs.dost.gov.ph" target="_blank">PHIVOLCS OFFICIAL WEBSITE</a></h3>
                              </div>
                          </div>
                      </div>
                    </div>
                      <hr>
                  </div>
  </div>

  <!--Weather and Announcement  -->
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;Weather</h4></div>
        <div class="panel-body">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <a href="http://www.accuweather.com/en/ph/tacloban-city/264004/weather-forecast/264004" class="aw-widget-legal">
            <!--
            By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
            -->
            </a><div id="awtd1440249309919" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awtd1440249309919" data-editlocation="true"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
          </a>
        </div>
      </div>

      <br /><br />
    </div>























    <!-- Header -->
    <!-- <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message" style="color:#000;">
                        <h1></h1>

                        <hr class="intro-divider">
                        <h4></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr> -->
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/img/pagasa.png" class="img-thumbnail" alt="" />
                <h3 class="text-center"><a href="http://www.pagasa.dost.gov.ph" target="_blank">PAGASA OFFICIAL WEBSITE</a></h3>
            </div>
            <div class="col-md-6">
                <img src="/assets/img/phivolcs.png" class="img-thumbnail" alt="" />
                <h3 class="text-center"><a href="http://www.phivolcs.dost.gov.ph" target="_blank">PHIVOLCS OFFICIAL WEBSITE</a></h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img src="/assets/img/flood.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="/assets/img/lique.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="/assets/img/ground.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="/assets/img/tsunami.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/storm_surge.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-4">
                <img src="/assets/img/landslide.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-4">
                <img src="/assets/img/earthquake.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <video src="/assets/uploads/v1.mp4" width="650" autoplay></video>
            </div>
            <div class="col-md-6">
                <video src="/assets/uploads/v2.mp4" width="650" autoplay></video>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <video src="/assets/uploads/v3.mp4" width="650" autoplay></video>
            </div>
            <div class="col-md-6">
                <video src="/assets/uploads/v4.mp4" width="650" autoplay></video>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <video src="/assets/uploads/v5.mp4" width="650" autoplay></video>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
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
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">MISSION</div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">VISION</div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php $this->load->view('includes/footer') ?>

</body>
</html>
