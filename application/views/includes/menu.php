<nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0;margin-bottom:30px">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <h4>CDRRMO</h4>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php echo $active == 'home' ? 'class="active"':'' ?>>
                    <a href="<?php echo base_url() ?>">
                        <span class="fa fa-home fa-lg"></span>
                        Home
                    </a>
                </li>
                <li <?php echo $active == 'profile' ? 'class="active"':'' ?>>
                    <a href="/myprofile">
                        <span class="fa fa-user fa-lg"></span>
                        Profile
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage</a>
                    <ul class="dropdown-menu">
                        <?php if ($this->session->userdata('type') == 'admin') { ?>
                            <li <?php echo $active == 'users' ? 'class="active"':'' ?>>
                                <a href="/users">
                                    <span class="fa fa-users fa-lg"></span>
                                    Users
                                </a>
                            </li>
                            <li <?php echo $active == 'hotline' ? 'class="active"':'' ?>>
                                <a href="/hotline">
                                    <span class="glyphicon glyphicon-earphone fa-lg"></span>
                                    Hotline
                                </a>
                            </li>
                            <li <?php echo $active == 'email' ? 'class="active"':'' ?>>
                                <a href="/email">
                                    <span class="fa fa-envelope fa-lg"></span>
                                    Email
                                </a>
                            </li>
                            <li <?php echo $active == 'post' ? 'class="active"':'' ?>>
                                <a href="/post">
                                    <span class="glyphicon glyphicon-file fa-lg"></span>
                                    Post
                                </a>
                            </li>
                            <li <?php echo $active == 'maps' ? 'class="active"':'' ?>>
                                <a href="/hazzard_maps">
                                    <span class="fa fa-map fa-lg"></span>
                                    Hazzard Maps
                                </a>
                            </li>
                            <li <?php echo $active == 'maps' ? 'class="active"':'' ?>>
                                <a href="/confirm_post">
                                    <span class="glyphicon glyphicon-file fa-lg"></span>
                                    Confirm Post
                                </a>
                            </li>
                        <?php } elseif ($this->session->userdata('type') == 'ngo') { ?>
                            <li <?php echo $active == 'con_post' ? 'class="active"':'' ?>>
                                <a href="/post">
                                    <span class="glyphicon glyphicon-file fa-lg"></span>
                                    Post
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($this->session->userdata('type') != 'admin') { ?>
                            <li <?php echo $active == 'hotline' ? 'class="active"':'' ?>>
                                <a href="/hotline_numbers">
                                    <span class="glyphicon glyphicon-earphone fa-lg"></span>
                                    Hotline
                                </a>
                            </li>
                            <li <?php echo $active == 'maps' ? 'class="active"':'' ?>>
                                <a href="/hazzard_maps_user">
                                    <span class="fa fa-map fa-lg"></span>
                                    Hazzard Maps
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li <?php echo $active == 'messages' ? 'class="active"':'' ?>>
                    <a href="/messages">
                        <span class="glyphicon glyphicon-comment fa-lg"></span>
                        Chat
                    </a>
                </li>
                <li>
                    <a href="/help">
                        <span class="fa fa-comment fa-lg"></span>
                        Help
                    </a>
                </li>

            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/change_password">Change Password</a></li>
                        <?php if ($this->session->userdata('type') == 'admin') { ?>
                            <li><a href="/logs">Logs</a></li>
                        <?php } ?>
                        <li class="divider"></li>
                        <li>
                            <a href="/locator">Locator</a>
                        </li>

                    </ul>
                </li>
            </ul>
        <?php
            $this->db->where('id', $this->session->userdata('id'));
            $a = $this->db->get('users')->row_array();
        ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/logout">Logout</a></a></li>
            </ul>
            <p class="navbar-text navbar-right">
                Welcome <?php echo $a['fname'] ?>
            </p>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br /></br /><br />
