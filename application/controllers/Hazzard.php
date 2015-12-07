<?php

class Hazzard extends CI_Controller
{
    function maps()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('caption', 'Description', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $d['error'] = '';
            $this->load->view('admin/maps', $d);
        }
        else
        {
            $config['upload_path']          = './assets/uploads/';
            // check if the attachment belongs to image
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 0;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {
                $data['pic']        = $this->upload->data('file_name');
                $data['caption']    = $this->input->post('caption');
                $this->db->insert('hazard_maps', $data);

                // insert logs
                $this->api->insert_logs('Added new hazard map');
                redirect('/hazzard_maps');
            }
            else
            {
                $d['error'] = alert($this->upload->display_errors());
                $this->load->view('admin/maps', $d);
            }
        }
    }

    function delete_map($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('hazard_maps');
        redirect('/hazzard_maps');
    }

    function user_maps()
    {
        $this->load->view('user/map');
    }
}
