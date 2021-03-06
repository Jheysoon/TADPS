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
                $password = $this->input->post('password');
                $con_pass = $this->input->post('con_pass');

                // TODO: check for a strong password

                if ($this->valid_pass($password)) {

                    if ($password == $con_pass) {
                        $config['upload_path']          = './assets/uploads/';
                        // check if the attachment belongs to image
                        $config['allowed_types']        = 'jpg|png|jpeg';
                        $config['max_size']             = 2048;
                        $config['encrypt_name']         = TRUE;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload()) {
                            $data['pic']        = $this->upload->data('file_name');
                            $data['fname']      = ucwords($this->input->post('fname'));
                            $data['lname']      = ucwords($this->input->post('lname'));
                            $data['mname']      = ucwords($this->input->post('mname'));
                            $data['email']      = $this->input->post('email');
                            $data['bday']       = $this->input->post('bday');
                            $data['contact']    = $this->input->post('contact');
                            $data['username']   = $username;
                            $data['password']   = password_hash($password, 1);
                            $data['address']    = $this->input->post('address');
                            $data['gender']     = $this->input->post('gender');
                            $data['question']   = $this->input->post('secret_q');
                            $data['answer']     = $this->input->post('answer_q');
                            $this->db->insert('users', $data);
                            $this->session->set_flashdata('message', alert('Successfully registered', 'success'));
                            redirect('/register');
                        } else {
                            $d['error'] = alert($this->upload->display_errors());
                            $this->load->view('user/register', $d);
                        }
                        
                    } else {
                        $d['error'] = alert('Please confirm your password');
                        $this->load->view('user/register', $d);
                    }
                    
                } else {
                    $d['error'] = '<div class="alert alert-danger">Password must have at
                                    least one capital letter a small letter a number and special character</div>';
                    $this->load->view('user/register', $d);
                }
                
            }
        }
    }
    
    function valid_pass($candidate) 
    {
        $r1='/[A-Z]/';  //Uppercase
        $r2='/[a-z]/';  //lowercase
        $r3='/[!@#$%&*()^,._;:-]/';  // whatever you mean by 'special char'
        $r4='/[0-9]/';  //numbers
        
        if(preg_match_all($r1,$candidate, $o)<1) return FALSE;
        
        if(preg_match_all($r2,$candidate, $o)<1) return FALSE;
        
        if(preg_match_all($r3,$candidate, $o)<1) return FALSE;
        
        if(preg_match_all($r4,$candidate, $o)<1) return FALSE;
        
        return TRUE;
    }
}
