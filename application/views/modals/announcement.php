<div class="modal fade" id="announcement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                    &nbsp;Announcement
                </h4>
            </div>
            <div class="modal-body">
                <?php
                    $announce = $this->announce->latest();
                    $user = $this->db->get_where('users', ['id' => $announce['user']])->row_array();
                 ?>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object profile_pic" src="/assets/uploads/<?php echo $user['pic'] ?>" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <?php
                            echo auto_typography($announce['message']);
                            if(! empty($announce['attach']))
                            {
                                ?>
                            <a href="/assets/uploads/<?php echo $announce['attach'] ?>" download="attachment_file">Download Attachment</a>
                        <?php
                            }
                         ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
