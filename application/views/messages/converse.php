<?php
    $ctr = 0;
    foreach($mes as $messages)
    {
        if($messages['user_from'] == $user_from)
        {
            $ctr++;
            ?>
            <div class="">
                <div class="convo_right text-right">
                    <a href="#" class="close pull-left">&times;</a>
                    <?php echo $messages['message']; ?>
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
            <div class="">
                <div class="convo_left">
                    <?php echo $messages['message']; ?>
                </div>
                <div class="tip_left"></div>
            </div>
        <?php
        }
    }
?>
