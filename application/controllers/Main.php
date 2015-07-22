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
        // RSS for fetching news
    }

    function subscribe()
    {
        // @todo:
        // reCaptcha
        // Signup "thank you" page
        // Opt-in confirmation email
        // Confirmation "thank you" page
        // Final "welcome" email
        // Unsubscribe success page
        // "Goodbye" email
        $this->load->helper('form');
        $this->load->view('email/email_page');
    }

    function logout()
    {
        $this->session->unset_userdata('id');
    }
}
