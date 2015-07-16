<?php

class Main extends CI_Controller
{
    function index()
    {
        $this->load->view('index');
    }
    function login()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');

        //rules
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('login');
        }

    }
}
