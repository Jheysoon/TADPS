<?php

class Post extends CI_Controller
{
    function all()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('post', 'Message', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $d['error'] = '';
            $this->load->view('user/post', $d);
        }
        else
        {
            $config['upload_path']          = './assets/uploads/';
            // check if the attachment belongs to image
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);
            $error = '';

            // upload the file
            if(! $this->upload->do_upload('attachment'))
                $error = $this->upload->display_errors();

            if($error == 'You did not select a file to upload.' OR $error == '')
            {
                $data['attachment'] = $error == '' ? $this->upload->data('file_name') : '' ;
                $data['message']    = $this->input->post('post');
                $data['user']       = $this->session->userdata('uid');
                $this->db->insert('posts', $data);
                redirect('/posts');
            }
            else
            {
                $d['error'] = '<div class="alert alert-danger">'.$error.'</div>';
                $this->load->view('user/post', $d);
            }

        }
    }

    function add_post()
    {
        $this->load->view('user/create_report');
    }
}
