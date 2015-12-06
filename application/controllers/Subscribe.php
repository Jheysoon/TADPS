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
        $this->load->library(array('form_validation', 'email'));
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
            // please confirm your email page and send email

            $email = $this->input->post('email');
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $config['protocol'] = "smtp";
                $config['smtp_host'] = 'ssl://smtp.gmail.com';
                $config['smtp_port'] = '465';
                $config['smtp_user'] = 'sonitgregorio@gmail.com';
                $config['smtp_pass'] = 'posterpolang';
                $config['mailtype'] = 'html';
                $config['charset'] = 'utf-8';
                $config['newline'] = "\r\n";
                $config['wordwrap'] = TRUE;

                $this->email->initialize($config);

                $this->email->from('sonitgregorio@gmail.com', 'Leyte Tourism Portal');
                $this->email->to($email);

                $this->email->subject('Email Test');
                $this->email->message('Please click the link for the password recovery');
                $this->email->send();
            }
            else {
                //invalid email
            }
        }
    }

    function email_confirm($id = '')
    {
        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('emails', ['status' => 1]);
            $this->load->view('email/confirm_email', ['message' => 'You Have Successfully Confirmed Your Email']);
        }
    }

    function unsubscribe($id = '')
    {
        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->delete('emails');
            $this->load->view('email/confirm_email', ['message' => 'You are successfully unsubscribe']);
        }
    }

    function all()
    {
        $this->load->helper('text');
        $this->load->view('admin/email');
    }

    function delete_email($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        redirect('/email');
    }
}
