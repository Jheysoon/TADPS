<?php

class Messages extends CI_Controller
{

    function inbox()
    {
        $this->load->helper('typography');
        $this->load->view('messages/inbox');
    }

    function conversation($id)
    {
        $this->load->view('messages/conversation');
    }
}
