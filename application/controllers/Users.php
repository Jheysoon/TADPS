<?php

class Users extends CI_Controller
{
    function all_users()
    {
        $this->load->view('user/all_users');
    }
}
