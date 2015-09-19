<?php $this->load->view('includes/header') ?>
<body>

    <?php $this->load->view('includes/menu', array('active' => 'home')) ?>

    <div class="contaner-fluid">
      <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">Videos</h4>
            </div>
            <div class="panel-body">
        	<div id="myCarousel" class="carousel slide" style="height: 460px;">
        		<div class="carousel-inner">
                    <?php
                        $vid = $this->db->get('video')->result_array();
                        $ctr = 0;
                        foreach($vid as $video)
                        {
                            ?>
                        <div class="item <?php echo $ctr == 0 ? 'active':'' ?>">
                            <video width="100%" height="500px" src="/assets/uploads/<?php echo $video['file'] ?>" controls preload="none" poster="posterimage.jpg" allowfullscreen=""></video>
            			</div>
                    <?php
                            $ctr++;
                        }
                     ?>
        		</div>
        		<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        		<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        	</div>
            <br /><br />
            </div>
              </div>

            <?php $a = $this->announce->latest(); ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title">Announcement</h4></div>
                    <div class="panel-body">
                        <small>Date&nbsp;:&nbsp;<?php echo $a['date'] ?></small>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <?php
                                        $this->db->where('id', 1);
                                        $r = $this->db->get('users')->row_array();
                                    ?>
                                    <img class="media-object" style="max-width:120px;" src="/assets/uploads/<?php echo $r['pic'] ?>" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Announcement</h4>
                            <?php
                                $a = $this->announce->latest();
                                echo auto_typography($a['message']);
                             ?>
                            </div>
                        </div>
                    </div>
                  </div>


                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title">Govenment Agency</h4></div>
                        <div class="panel-body">

                          <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="/assets/img/pagasa.png" class="img-thumbnail" alt="" />
                                        <h3 class="text-center"><a href="http://www.pagasa.dost.gov.ph" target="_blank">PAGASA OFFICIAL WEBSITE</a></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="/assets/img/phivolcs.png" class="img-thumbnail" alt="" />
                                        <h3 class="text-center"><a href="http://www.phivolcs.dost.gov.ph" target="_blank">PHIVOLCS OFFICIAL WEBSITE</a></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="/assets/img/tac.png" class="img-thumbnail" alt="" />
                                        <h3 class="text-center"><a href="http://www.tacloban.gov.ph" target="_blank">TACLOBAN OFFICIAL WEBSITE</a></h3>
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
            <div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title">Weather</h4></div>
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
    </div>

    <?php $this->load->view('includes/footer') ?>
</body>
</html>
