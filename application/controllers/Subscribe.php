<?php

class Subscribe extends CI_Controller
{
    function email_page()
    {
        // @todo:
        // Opt-in confirmation email
        // Confirmation "thank you" page
        // Final "welcome" email
        // Unsubscribe success page
        // "Goodbye" email
        $this->load->helper(array('form', 'captcha', 'string'));
        $this->load->library('form_validation');

        // validation rules for form posting
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('txt_captcha', 'Captcha' ,'required');

        // test if the post form meet the standard
        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('email/email_page');
        }
        else
        {
            // please confirm your email page
        }
    }
}
