<?php

class Post extends CI_Controller
{
    function all()
    {
        $this->load->view('user/post');
    }

    function add_post()
    {
        $this->load->view('user/create_report');
    }
}
