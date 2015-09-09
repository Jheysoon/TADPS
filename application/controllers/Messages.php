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

    function chat()
    {
        $user_to    = $this->input->post('user');
        $user_from  = $this->session->userdata('id');

        $this->db->where('user_to', $user_to)->where('user_from', $user_from);
        $data['mes']        = $this->db->get('chats')->result_array();
        $data['user_to']    = $user_to;
        $data['user_from']  = $user_from;

        $this->load->view('messages/converse', $data);
    }
}
