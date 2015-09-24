<?php
    $ctr = 0;
    if(count($mes))
    {
        foreach($mes as $messages)
        {
            if($messages['user_from'] == $user_from)
            {
                $ctr++;
            ?>
            <div class="chat_container">
                <div class="convo_right text-right">
                    <a href="#" data-param="<?php echo $messages['id'] ?>" class="close delete_conversation pull-left">&times;</a>
                    <?php echo auto_typography($messages['message']); ?>
                    <span class="pull-left"><?php echo $messages['ttime']; ?></span>
                    <span class="clearfix"></span>
                </div>
                <div class="tip_right pull-right"></div>
            </div>
            <?php
                if($ctr > 0)
                    echo '<br/>';
            }
            else
            {
            ?>
            <div class="chat_container">
                <div class="convo_left">
                    <?php echo auto_typography($messages['message']); ?>
                    <span class="pull-right"><?php echo $messages['ttime']; ?></span>
                    <span class="clearfix"></span>
                </div>
                <div class="tip_left"></div>
            </div>
        <?php
            }
        }
    }
    else {
        ?>
        <div class="alert alert-info text-center">
            No Messages Yet .... &nbsp;<span class="fa fa-refresh"></span>
        </div>
    <?php
    }
?>
