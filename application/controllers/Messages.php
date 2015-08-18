<?php

// chat messages
class Messages extends CI_Controller
{

    function inbox()
    {
        $this->load->view('messages/inbox');
    }

    function conversation($id)
    {
        $this->load->view('messages/conversation');
    }
}
