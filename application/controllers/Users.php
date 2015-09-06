<?php

class Users extends CI_Controller
{
    function all_users($id = '')
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set all rules
        $rules = [
                    ['field' => 'fname',    'label' => 'Firstname',     'rules' => 'required'],
                    ['field' => 'lname',    'label' => 'Lastname',      'rules' => 'required'],
                    ['field' => 'mname',    'label' => 'Middlename',    'rules' => 'required'],
                    ['field' => 'office',   'label' => 'Office',        'rules' => 'required'],
                    ['field' => 'contact',  'label' => 'Contact Number','rules' => 'required']
                ];
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() === FALSE)
        {
            if(empty($id))
            {
                $d['error']     = '';
                $d['id']        = '';
                $d['fname']     = set_value('fname');
                $d['lname']     = set_value('lname');
                $d['mname']     = set_value('mname');
                $d['office']    = set_value('office');
                $d['contact']   = set_value('contact');
            }
            else
            {
                // @todo: ask if the username and password is neccessary in
                // edit user
                $this->db->where('id', $id);
                $u              = $this->db->get('users')->row_array();
                $d['fname']     = $u['fname'];
                $d['lname']     = $u['lname'];
                $d['mname']     = $u['mname'];
                $d['office']    = $u['office'];
                $d['contact']   = $u['contact'];
                $d['id']        = $id;
                $d['error']     = '';
            }
            $this->load->view('admin/all_users', $d);
        }
        else
        {
            if(empty($id))
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
                            $d['id']        = '';
                            $d['fname']     = set_value('fname');
                            $d['lname']     = set_value('lname');
                            $d['mname']     = set_value('mname');
                            $d['office']    = set_value('office');
                            $d['contact']   = set_value('contact');
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
                            $data['password']   = password_hash($password, PASSWORD_BCRYPT);
                            $this->db->insert('users', $data);
                            redirect('/users');
                        }
                    }
                    else
                    {
                        $d['error'] = '<div class="alert alert-danger">Please Confirm Password</div>';
                        $d['id']        = '';
                        $d['fname']     = set_value('fname');
                        $d['lname']     = set_value('lname');
                        $d['mname']     = set_value('mname');
                        $d['office']    = set_value('office');
                        $d['contact']   = set_value('contact');
                        $this->load->view('admin/all_users', $d);
                    }
                }
                else
                {
                    $d['error'] = '<div class="alert alert-danger">Invalid Contact Number</div>';
                    $d['id']        = '';
                    $d['fname']     = set_value('fname');
                    $d['lname']     = set_value('lname');
                    $d['mname']     = set_value('mname');
                    $d['office']    = set_value('office');
                    $d['contact']   = set_value('contact');
                    $this->load->view('admin/all_users', $d);
                }
            }
            else
            {
                $data['fname']      = $this->input->post('fname');
                $data['lname']      = $this->input->post('lname');
                $data['mname']      = $this->input->post('mname');
                $data['office']     = $this->input->post('office');
                $data['contact']    = $this->input->post('contact');
                $this->db->where('id' ,$id);
                $this->db->update('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully edited</div>');
                redirect('/users');
            }

        }

    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully deleted</div>');
        redirect('/users');
    }
}
