<?php $this->load->view('includes/header') ?>
<body>
    <div class="content-section-c">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="content-section-b">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div>
                        <?php
                            $word = random_string('alnum', 6);
                            $vals = array(
                                'word'          => $word,
                                'img_path'      => './assets/captcha/',
                                'img_url'       => 'http://thesis.dev.com/assets/captcha/',
                                'font_path'     => './path/to/fonts/texb.ttf',
                                'img_width'     => '300',
                                'img_height'    => 50,
                                'expiration'    => 100,
                                'font_size'     => 16,

                                // White background and border, black text and red grid
                                'colors'        => array(
                                        'background' => array(255, 255, 255),
                                        'border' => array(0, 0, 0),
                                        'text' => array(0, 0, 0),
                                        'grid' => array(250, 230, 250)
                                )
                        );

                        $cap = create_captcha($vals);

                        ?>
                        <form action="/subscribe" class="center-block" method="post" style="max-width:300px;">
                            <input type="text" class="form-control input-lg" name="name" value="<?php echo set_value('name'); ?>" autofocus placeholder="Your name" required>
                            <input type="email" class="form-control input-lg margin-top-5px" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address" required>
                            <input type="hidden" name="word" value="<?php echo $cap['word']; ?>">
                            <?php echo $cap['image']; ?>
                            <p class="text-center">Prove your not a robot:</p>
                            <input type="text" class="form-control" name="txt_captcha" placeholder="Type the word" required>
                            <a href="<?php echo base_url(); ?>" class="btn btn-default btn-sm margin-top-5px">Back</a>
                            <input type="submit" class="btn btn-primary btn-sm pull-right margin-top-5px" name="btnSubmit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer') ?>
</body>
</html>
