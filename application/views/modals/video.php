<div class="modal fade" id="videos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    &nbsp;Videos
                </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" style="height: 460px;">
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
                        		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">‹</a>
                        		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">›</a>
                        	</div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
