<?php

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

    function chat()
    {
        $user_to    = $this->input->post('user');
        $user_from  = $this->session->userdata('id');

        if($user_to OR $user_from)
        {
            $this->converse($user_to, $user_from);
        }
    }

    function converse($user_to = '', $user_from = '')
    {
        if(! empty($user_to) OR ! empty($user_from))
        {
            $this->load->helper('typography');

            $this->db->where('user_to', $user_to)
            ->where('user_from', $user_from)
            ->or_where('user_to', $user_from)
            ->where('user_from', $user_to);
            $data['mes']        = $this->db->get('chats')->result_array();
            $data['user_to']    = $user_to;
            $data['user_from']  = $user_from;

            $this->load->view('messages/converse', $data);
        }
    }

    function getName()
    {
        $user = $this->input->post('user');
        $this->db->where('id', $user);
        $this->db->select('fname,lname,office');
        $r      = $this->db->get('users')->row_array();
        $office = '';
        if(! empty($r['office']))
        {
            $office = '('.$r['office'].')';
        }
        echo $r['fname'].' '.$r['lname'].' '.$office;
    }

    function form()
    {
        $d['user_to']    = $this->input->post('user_to');
        $d['user_from']  = $this->input->post('user_from');
        $d['message']    = $this->input->post('message');

        if($d['user_to'] OR $d['user_from'])
        {
            $this->db->insert('chats', $d);
            $this->converse($d['user_to'], $d['user_from']);
        }
    }

    function delete_conversation()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('chats');
    }
}
