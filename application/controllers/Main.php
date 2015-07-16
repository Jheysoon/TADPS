<?php

class Main extends CI_Controller
{
    function index()
    {
        if(!$this->session->has_userdata('id'))
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
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

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
                $this->session->set_userdata('id', $user_id);
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
        echo "dfsdf";
    }

    function logout()
    {
        $this->session->unset_userdata('id');
    }
}
