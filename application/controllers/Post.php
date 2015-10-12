<?php

class Post extends CI_Controller
{
    function all()
    {
        $this->load->helper(array('form', 'typography', 'date'));
        $this->load->library('form_validation');
        $this->load->model('announce');

        $this->form_validation->set_rules('post', 'Message', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $d['error'] = '';
            $this->load->view('user/post', $d);
        }
        else
        {
            $config['upload_path']          = './assets/uploads/';
            // check if the attachment belongs to image/document/spreadsheet
            $config['allowed_types']        = 'jpg|png|jpeg|doc|docx|pdf|xlsx';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);
            $error = '';

            // upload the file
            if(! $this->upload->do_upload('attachment'))
            {
                $error = $this->upload->display_errors();
            }

            if($error == '<p>You did not select a file to upload.</p>' OR $error == '')
            {
                //<p>You did not select a file to upload.</p>
                $data['attach']     = ($error == '') ? $this->upload->data('file_name') : '';
                $data['message']    = $this->input->post('post');
                $data['user']       = $this->session->userdata('id');
                $data['date']       = date('Y-m-d');
                $data['ttime']      = mdate('%h:%i %a', time());
                $this->db->insert('announcement', $data);

                // insert logs
                $this->api->insert_logs('Added new post');
                redirect('/post');
            }
            else
            {
                $d['error'] = '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
                $this->load->view('user/post', $d);
            }
        }
    }

    function add_post()
    {
        $this->load->view('user/create_report');
    }

    function upload_vid()
    {
        $config['upload_path']          = './assets/uploads/';
        // check if the attachment belongs to image/document/spreadsheet
        $config['allowed_types']        = 'mp4|avi|wmv';
        $config['max_size']             = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);


        if($this->upload->do_upload('file'))
        {
            $d['file'] = $this->upload->data('file_name');
            $this->db->insert('video', $d);

            // insert logs
            $this->api->insert_logs('Uploaded new video');
            echo '<div class="alert alert-danger text-center">Successfully Uploaded</div>';
        }
        else
        {
            echo '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
        }
    }
}
