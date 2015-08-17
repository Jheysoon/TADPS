<?php

class Main extends CI_Controller
{
    function index()
    {
        if(!$this->session->has_userdata('id'))
        //if(FALSE)
            $this->load->view('index');
        else
            $this->home();
    }
    function login()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');

        $data['error'] = '';
        //rules
        $rules = [
                    ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required'],
                    ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required']
                ];
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() === FALSE)
            $this->load->view('login', $data);
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('user');

            $user_id = $this->user->login($username, $password);
            if($user_id != FALSE)
            {
                $this->db->where('id', $user_id);
                $this->db->select('type');
                $type = $this->db->get('users')->row_array();

                $info = array('id' => $user_id,'type' => $type['type']);
                // set the session
                $this->session->set_userdata($info);
                redirect(base_url());
            }
            else
            {
                $data['error'] = '<div class="alert alert-danger">Authentication Failed</div>';
                $this->load->view('login', $data);
            }
        }
    }

    function home()
    {
        if($this->session->userdata('type') == 'admin')
            $this->load->view('admin/home');
        else
            $this->load->view('user/home');
    }

    function profile()
    {
        // if($this->session->userdata('type') == 'admin')
        // {
            $this->db->where('id', $this->session->userdata('id'));
            $data = $this->db->get('users')->row_array();
            $this->load->view('admin/profile', $data);
        // }
        // else
        //     $this->load->view('user/profile');
    }

    function change_pass()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $rules = [
                    ['field' => 'n_pass', 'label' => 'Password', 'rules' => 'required'],
                    ['field' => 'r_pass', 'label' => 'Password', 'rules' => 'required']
                ];
        $this->form_validation->set_rules($rules);

        $this->load->view('change_pass');
    }

    function hotline()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('office', 'Office', 'required');
        $this->form_validation->set_rules('number', 'Telephone Number', 'required');

        if($this->form_validation->run() === FALSE)
            $this->load->view('admin/hotline');
        else
        {
            $data['office'] = ucwords($this->input->post('office'));
            $data['num']    = $this->input->post('number');

            $this->db->insert('hotlines', $data);
            redirect('/hotline');
        }
    }

    function wheather()
    {
        $this->load->view('wheather');
    }

    function logout()
    {
        $this->session->unset_userdata(['id', 'type']);
        redirect(base_url());
    }
}
