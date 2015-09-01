<?php

class Users extends CI_Controller
{
    function all_users()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set all rules
        $rules = [
                    ['field' => 'fname',    'label' => 'Firstname',     'rules' => 'required'],
                    ['field' => 'lname',    'label' => 'Lastname',      'rules' => 'required'],
                    ['field' => 'mname',    'label' => 'Middlename',    'rules' => 'required'],
                    ['field' => 'username', 'label' => 'Username',      'rules' => 'required'],
                    ['field' => 'password', 'label' => 'Password',      'rules' => 'required'],
                    ['field' => 'contact',  'label' => 'Contact Number','rules' => 'required']
                ];
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() === FALSE)
        {
            $d['error'] = '';
            $this->load->view('admin/all_users', $d);
        }
        else
        {
            // check if the length is 11
            $contact = $this->input->post('contact');
            if(strlen($contact) == 11)
            {
                $password = $this->input->post('password');
                $con_pass = $this->input->post('con_pass');
                // does it match the password and confirm password
                if($password == $con_pass)
                {
                    $username = $this->input->post('username');

                    // check if the username already exists
                    $this->db->where('username', $username);
                    $c = $this->db->count_all_results('users');
                    if($c > 0)
                    {
                        // if it exists recommend a username
                        $this->load->helper('string');

                        $ar     = $this->db->get('users')->result_array();
                        $data1  = array();

                        foreach($ar as $user)
                        {
                            $data1[] = $user['username'];
                        }

                        $suggest = increment_exists($username, $data1);
                        $d['error'] = '<div class="alert alert-danger text-center">
                                Username is already taken <br/>
                                Recommended username: '.$suggest.'</div>';
                        $this->load->view('admin/all_users', $d);
                    }
                    else
                    {
                        // after all the validation insert it to table
                        $data['fname']      = ucwords($this->input->post('fname'));
                        $data['lname']      = ucwords($this->input->post('lname'));
                        $data['mname']      = ucwords($this->input->post('mname'));
                        $data['office']     = ucwords($this->input->post('office'));
                        $data['type']       = 'ngo';
                        $data['contact']    = $contact;
                        $data['username']   = $this->input->post('username');
                        $data['password']   = password_hash($password, 1);
                        $this->db->insert('users', $data);
                        redirect('/users');
                    }
                }
                else
                {
                    $d['error'] = '<div class="alert alert-danger">Please Confirm Password</div>';
                    $this->load->view('admin/all_users', $d);
                }
            }
            else
            {
                $d['error'] = '<div class="alert alert-danger">Invalid Contact Number</div>';
                $this->load->view('admin/all_users', $d);
            }

        }
    }
}
