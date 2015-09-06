<?php

class Main extends CI_Controller
{
    function index()
    {
        if(!$this->session->has_userdata('id'))
        {
            $this->load->helper(array('text', 'typography'));
            $this->load->model('announce');
            $this->load->view('index');
        }
        else
            $this->home();
    }
    function login()
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
            echo 'success';
        }
        else
        {
            echo '<div class="alert alert-danger text-center">Authentication Failed</div>';
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

    function hotline($id = '')
    {
        if(empty($id))
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('office', 'Office', 'required');
            $this->form_validation->set_rules('number', 'Telephone Number', 'required');

            if($this->form_validation->run() === FALSE)
            {
                $d['id']        = '';
                $d['office']    = set_value('office');
                $d['num']       = set_value('num');
                $this->load->view('admin/hotline', $d);
            }
            else
            {
                $data['office'] = ucwords($this->input->post('office'));
                $data['num']    = $this->input->post('number');

                $this->db->insert('hotlines', $data);
                redirect('/hotline');
            }
        }
        else
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('office', 'Office', 'required');
            $this->form_validation->set_rules('number', 'Telephone Number', 'required');
            if($this->form_validation->run() === FALSE)
            {
                $this->db->where('id', $id);
                $h = $this->db->get('hotlines')->row_array();

                $d['office']    = $h['office'];
                $d['id']        = $h['id'];
                $d['num']       = $h['num'];
                $this->load->view('admin/hotline', $d);
            }
            else
            {
                $data['office'] = $this->input->post('office');
                $data['num']    = $this->input->post('number');
                $this->db->where('id', $id);
                $this->db->update('hotlines', $data);
                redirect('/hotline');
            }
        }
    }

    function hotline_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        redirect('/hotline');
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
    function hazzard()
    {
      $this->load->view('hazzardmap');
    }
    function hot()
    {
      $this->load->view('hotlines');
    }
    function hazzardmaps()
    {
      $this->load->view('includes/header');
      $this->load->view('includes/menu', array('active' =>  'maps'));
      $this->load->view('hazzardmap');
      $this->load->view('includes/footer');
    }

    function locator()
    {
        $this->load->view('locator');
    }
}
