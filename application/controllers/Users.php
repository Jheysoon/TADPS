<?php

class Users extends CI_Controller
{
    function all_users()
    {
        if($this->session->userdata('type') == 'admin')
            $this->load->view('admin/all_users');
    }
}
