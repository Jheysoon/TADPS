<?php

class Main extends CI_Controller
{
    function index()
    {
        if (!$this->session->has_userdata('id')) {
            $this->load->helper(array('text', 'typography'));
            $this->load->model('announce');
            $this->load->view('index');
        } else
            $this->home();
    }
    
    function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('user');

        $user_id = $this->user->login($username, $password);
        
        if ($user_id != FALSE) {
            $this->db->where('id', $user_id);
            $this->db->select('type');
            $type = $this->db->get('users')->row_array();

            $this->db->where('user', $user_id);
            $count = $this->db->count_all_results('login');
            
            if ($count > 0) {
                echo alert('Your account has already used to login', 'warning');
            } else {
                // insert into login tables
                $data['user'] = $user_id;
                $this->db->insert('login', $data);

                $info = array('id' => $user_id,'type' => $type['type']);
                // set the session
                $this->session->set_userdata($info);
                echo 'success';
            }
            
        } else {
            echo alert('Authentication Failed', 'danger');
        }
    }

    function home()
    {
        $this->load->model('announce');
        $this->load->helper('typography');

        $this->load->view('admin/home');
    }

    function profile()
    {
        $this->load->helper('date');
        $this->db->where('id', $this->session->userdata('id'));
        $data = $this->db->get('users')->row_array();
        $this->load->view('admin/profile', $data);
    }

    function change_pass()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $rules = [
                    ['field' => 'new_pass', 'label' => 'Password', 'rules' => 'required'],
                    ['field' => 'r_pass', 'label' => 'Password', 'rules' => 'required']
                ];
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() === FALSE) {
            $d['error'] = '';
            $this->load->view('change_pass', $d);
        } else {
            $old = $this->input->post('old_pass');
            $new = $this->input->post('new_pass');

            $this->db->where('id', $this->session->userdata('id'));
            $u = $this->db->get('users')->row_array();
            
            if (password_verify($old, $u['password'])) {
                
                if ($this->input->post('r_pass') == $new) {
                    $data['password'] = password_hash($new, PASSWORD_BCRYPT);
                    $this->db->where('id', $this->session->userdata('id'));
                    $this->db->update('users', $data);
                    redirect(base_url());
                } else {
                    $d['error'] = alert('Please confirm your password', 'danger');
                    $this->load->view('change_pass', $d);
                }
                
            } else {
                $d['error'] = alert('Invalid Old Password', 'danger');
                $this->load->view('change_pass', $d);
            }
        }
    }

    function hotline($id = '')
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('office', 'Office', 'required');
        $this->form_validation->set_rules('number', 'Telephone Number', 'required');

        if ($this->form_validation->run() === FALSE) {
            
            if (empty($id)) {
                $d['id']        = '';
                $d['office']    = set_value('office');
                $d['num']       = set_value('num');
            } else {
                $this->db->where('id', $id);
                $h = $this->db->get('hotlines')->row_array();

                $d['office']    = $h['office'];
                $d['id']        = $h['id'];
                $d['num']       = $h['num'];
            }

            $this->load->view('admin/hotline', $d);
        } else {
            
            if (empty($id)) {
                $data['office'] = ucwords($this->input->post('office'));
                $data['num']    = $this->input->post('number');

                $this->db->insert('hotlines', $data);
            } else {
                $data['office'] = $this->input->post('office');
                $data['num']    = $this->input->post('number');
                $this->db->where('id', $id);
                $this->db->update('hotlines', $data);

                // insert logs
                $this->api->insert_logs('Added hotline number');
                redirect('/hotline');
            }

            redirect('/hotline');
        }
    }

    function hotline_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('hotlines');

        // insert logs
        $this->api->insert_logs('Deleted hotline');
        redirect('/hotline');
    }

    function wheather()
    {
        $this->load->view('wheather');
    }

    function logout()
    {
        // delete the user entry in login table
        $this->db->where('user', $this->session->userdata('id'));
        $this->db->delete('login');

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

    function locator($lat = 11.244072, $long = 124.999341)
    {
        $data['lat']    = $lat;
        $data['long']   = $long;
        
        $this->load->view('locator', $data);
    }
}
