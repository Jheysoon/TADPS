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
        if($user == 0)
        {
            echo 'Send to All';
        }
        else
        {
            $this->db->where('id', $user);
            $this->db->select('fname,lname,office');
            $r      = $this->db->get('users')->row_array();
            $office = '';
            if(! empty($r['office']))
            {
                $office = '('.$r['office'].')';
            }
            echo $r['fname'].' '.$r['lname'].' '.$office;
            $data['status'] = 1;
            $this->db->where('user_from', $user);
            $this->db->where('user_to', $this->session->userdata('id'));
            $this->db->update('chats', $data);
        }
    }

    function form()
    {
        $this->load->helper('date');
        $user_to    = $this->input->post('user_to');
        if($user_to == 0)
        {
            $this->db->where('id !=', $this->session->userdata('id'));
            $message = $this->input->post('message');
            $u = $this->db->get('users')->result_array();
            foreach($u as $user)
            {
                $d['user_to']    = $user['id'];
                $d['user_from']  = $this->session->userdata('id');
                $ttime           = mdate('%h:%i%a');
                $d['ttime']      = date('Y-m-d').' '.$ttime;
                $d['status']     = 0;
                $d['message']    = $message;
                $this->db->insert('chats', $d);
            }
            echo alert('Successfully Send to All', 'info');
        }
        else
        {
            $d['user_to']    = $this->input->post('user_to');
            $d['user_from']  = $this->input->post('user_from');
            $d['message']    = $this->input->post('message');
            $ttime           = mdate('%h:%i%a');
            $d['ttime']      = date('Y-m-d').' '.$ttime;
            $d['status']     = 0;

            if($d['user_to'] OR $d['user_from'])
            {
                $this->db->insert('chats', $d);
                $this->converse($d['user_to'], $d['user_from']);
            }
        }

    }

    function delete_conversation()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('chats');
    }

    function get_user()
    {
        $this->load->view('messages/users');
    }
}
