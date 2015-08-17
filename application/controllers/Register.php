<?php

class Register extends CI_Controller
{
    function reg()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $rules = [
                    ['field' => 'fname',    'label' => 'Firstname',     'rules' => 'required'],
                    ['field' => 'lname',    'label' => 'Lastname',      'rules' => 'required'],
                    ['field' => 'mname',    'label' => 'Middlename',    'rules' => 'required'],
                    ['field' => 'username', 'label' => 'Username',      'rules' => 'required'],
                    ['field' => 'password', 'label' => 'Password',      'rules' => 'required']
                ];
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('user/register');
        }
        else
        {
            $data['fname']      = ucwords($this->input->post('fname'));
            $data['lname']      = ucwords($this->input->post('lname'));
            $data['mname']      = ucwords($this->input->post('mname'));
            if($this->session->has_userdata('id'))
            {
                $data['office']     = ucwords($this->input->post('office'));
            }
            else {
                $data['email']  = $this->input->post('email');
            }
            $data['username']   = $this->input->post('username');
            $data['password']   = password_hash($this->input->post('password'), 1);
            $this->db->insert('users', $data);
            redirect('/register');
        }

    }
}
