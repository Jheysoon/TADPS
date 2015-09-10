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
            <div class="">
                <div class="convo_right text-right">
                    <a href="#" class="close pull-left">&times;</a>
                    <?php echo auto_typography($messages['message']); ?>
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
                    <?php echo auto_typography($messages['message']); ?>
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
            No Messages Yet ....
        </div>
    <?php
    }
?>
