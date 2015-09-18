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
            $d['error'] = '';
            $this->load->view('user/register', $d);
        }
        else
        {
            $username = $this->input->post('username');
            $this->db->where('username', $username);
            $count = $this->db->count_all_results('users');
            if($count > 0)
            {
                $this->load->helper('string');

                $ar     = $this->db->get('users')->result_array();
                $data   = array();

                foreach($ar as $user)
                {
                    $data[] = $user['username'];
                }

                $suggest = increment_exists($username, $data);
                $d['error'] = '<div class="alert alert-danger text-center">
                        Username is already taken <br/>
                        Recommended username: '.$suggest.'</div>';
                $this->load->view('user/register', $d);
            }
            else
            {
                $config['upload_path']          = './assets/uploads/';
                // check if the attachment belongs to image
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);
                if($this->upload->do_upload())
                {
                    $data['pic']        = $this->upload->data('file_name');
                    $data['fname']      = ucwords($this->input->post('fname'));
                    $data['lname']      = ucwords($this->input->post('lname'));
                    $data['mname']      = ucwords($this->input->post('mname'));
                    $data['email']      = $this->input->post('email');
                    $data['username']   = $username;
                    $data['password']   = password_hash($this->input->post('password'), 1);
                    $data['address']    = $this->input->post('address');
                    $data['gender']     = $this->input->post('gender');
                    $this->db->insert('users', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully registered</div>');
                    redirect('/register');
                }
                else
                {
                    $d['error'] = '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
                    $this->load->view('user/register', $d);
                }
            }
        }
    }
}
