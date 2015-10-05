<?php

class Users extends CI_Controller
{
    function all_users($id = '')
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set all rules
        $rules = [
                    ['field' => 'fname',    'label' => 'Firstname',     'rules' => 'required'],
                    ['field' => 'lname',    'label' => 'Lastname',      'rules' => 'required'],
                    ['field' => 'mname',    'label' => 'Middlename',    'rules' => 'required'],
                    ['field' => 'office',   'label' => 'Office',        'rules' => 'required'],
                    ['field' => 'contact',  'label' => 'Contact Number','rules' => 'required']
                ];
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() === FALSE)
        {
            if(empty($id))
            {
                $d['error']     = '';
                $d['id']        = '';
                $d['fname']     = set_value('fname');
                $d['lname']     = set_value('lname');
                $d['mname']     = set_value('mname');
                $d['office']    = set_value('office');
                $d['contact']   = set_value('contact');
            }
            else
            {
                // @todo: ask if the username and password is neccessary in
                // edit user
                $this->db->where('id', $id);
                $u              = $this->db->get('users')->row_array();
                $d['fname']     = $u['fname'];
                $d['lname']     = $u['lname'];
                $d['mname']     = $u['mname'];
                $d['office']    = $u['office'];
                $d['contact']   = $u['contact'];
                $d['id']        = $id;
                $d['error']     = '';
            }
            $this->load->view('admin/all_users', $d);
        }
        else
        {
            if(empty($id))
            {
                // check if the length is 11
                $contact = $this->input->post('contact');
                if(strlen($contact) == 11)
                {
                    $password = $this->input->post('password');
                    $con_pass = $this->input->post('con_pass');
                    // does it match the password and confirm password
                    if($password == $con_pass)
                    {
                        $username = $this->input->post('username');

                        // check if the username already exists
                        $this->db->where('username', $username);
                        $c = $this->db->count_all_results('users');
                        if($c > 0)
                        {
                            // if it exists recommend a username
                            $this->load->helper('string');

                            $ar     = $this->db->get('users')->result_array();
                            $data1  = array();

                            foreach($ar as $user)
                            {
                                $data1[] = $user['username'];
                            }

                            $suggest = increment_exists($username, $data1);
                            $d['error'] = '<div class="alert alert-danger text-center">
                                    Username is already taken <br/>
                                    Recommended username: '.$suggest.'</div>';
                            $d['id']        = '';
                            $d['fname']     = set_value('fname');
                            $d['lname']     = set_value('lname');
                            $d['mname']     = set_value('mname');
                            $d['office']    = set_value('office');
                            $d['contact']   = set_value('contact');
                            $this->load->view('admin/all_users', $d);
                        }
                        else
                        {
                            // after all the validation insert it to table
                            $data['fname']      = ucwords($this->input->post('fname'));
                            $data['lname']      = ucwords($this->input->post('lname'));
                            $data['mname']      = ucwords($this->input->post('mname'));
                            $data['office']     = ucwords($this->input->post('office'));
                            $data['type']       = 'ngo';
                            $data['contact']    = $contact;
                            $data['username']   = $this->input->post('username');
                            $data['password']   = password_hash($password, PASSWORD_BCRYPT);
                            $this->db->insert('users', $data);
                            redirect('/users');
                        }
                    }
                    else
                    {
                        $d['error'] = '<div class="alert alert-danger">Please Confirm Password</div>';
                        $d['id']        = '';
                        $d['fname']     = set_value('fname');
                        $d['lname']     = set_value('lname');
                        $d['mname']     = set_value('mname');
                        $d['office']    = set_value('office');
                        $d['contact']   = set_value('contact');
                        $this->load->view('admin/all_users', $d);
                    }
                }
                else
                {
                    $d['error'] = '<div class="alert alert-danger">Invalid Contact Number</div>';
                    $d['id']        = '';
                    $d['fname']     = set_value('fname');
                    $d['lname']     = set_value('lname');
                    $d['mname']     = set_value('mname');
                    $d['office']    = set_value('office');
                    $d['contact']   = set_value('contact');
                    $this->load->view('admin/all_users', $d);
                }
            }
            else
            {
                $data['fname']      = $this->input->post('fname');
                $data['lname']      = $this->input->post('lname');
                $data['mname']      = $this->input->post('mname');
                $data['office']     = $this->input->post('office');
                $data['contact']    = $this->input->post('contact');
                $this->db->where('id' ,$id);
                $this->db->update('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully edited</div>');
                redirect('/users');
            }

        }

    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully deleted</div>');
        redirect('/users');
    }

    function hotline()
    {
        $this->load->view('user/hotline');
    }

    function edit_profile($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('mname', 'Middlename', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $data['error'] = '';
            $this->db->where('id', $id);
            $data1          = $this->db->get('users')->row_array();

            if(! $this->input->post('fname'))
            {
                $data['fname']  = $data1['fname'];
                $data['lname']  = $data1['lname'];
                $data['mname']  = $data1['mname'];
                $data['pic']    = $data1['pic'];
                $data['id']     = $data1['id'];
                $data['contact']= $data1['contact'];
                $data['address']= $data1['address'];
                $data['gender'] = $data1['gender'];
                $data['bday']   = $data1['bday'];
                if($this->session->userdata('type') == 'ngo')
                    $data['office'] = $data1['office'];
                elseif($this->session->userdata('type') == '')
                    $data['email']  = $data1['email'];
            }
            else
            {
                $data['fname']  = set_value('fname');
                $data['lname']  = set_value('lname');
                $data['pic']    = $data1['pic'];
                $data['mname']  = set_value('mname');
                $data['contact']= set_value('contact');
                $data['address']= set_value('address');
                $data['gender'] = set_value('gender');
                $data['bday']   = set_value('bday');
                if($this->session->userdata('type') == 'ngo')
                    $data['office'] = set_value('office');
                elseif($this->session->userdata('type') == '')
                    $data['email']  = set_value('email');
                $data['id']     = $id;
            }
            $this->load->view('user/edit_profile', $data);
        }
        else
        {
            $config['upload_path']          = './assets/uploads/';
            // check if the attachment belongs to image
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);

            if($this->upload->do_upload())
            {
                $this->update_user($id, $this->upload->data('file_name'));
            }
            elseif ($this->upload->display_errors() == '<p>You did not select a file to upload.</p>')
            {
                $this->update_user($id);
            }
            else
            {
                $data['fname']  = set_value('fname');
                $data['lname']  = set_value('lname');
                $data['pic']    = '';
                $data['mname']  = set_value('mname');
                $data['contact']= set_value('contact');
                $data['bday']   = set_value('bday');

                if($this->session->userdata('type') == 'ngo')
                    $data['office'] = set_value('office');
                elseif($this->session->userdata('type') == '')
                    $data['email']  = set_value('email');
                $data['id']     = $id;

                $data['error'] = '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';

                $this->load->view('user/edit_profile', $data);
            }
        }
    }

    function update_user($id, $pic = '')
    {
        $data['fname']      = $this->input->post('fname');
        $data['lname']      = $this->input->post('lname');
        $data['mname']      = $this->input->post('mname');
        $data['contact']    = $this->input->post('contact');
        $data['address']    = $this->input->post('address');
        $data['gender']     = $this->input->post('gender');
        $data['bday']       = $this->input->post('bday');
        if($this->session->userdata('type') == 'ngo')
            $data['office'] = $this->input->post('office');
        elseif($this->session->userdata('type') == '')
            $data['email']  = $this->input->post('email');

        if($pic != '')
            $data['pic']    = $pic;

        $this->db->where('id', $id);
        $this->db->update('users', $data);
        redirect('/edit_profile/'.$id);
    }

    function add_admin()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('mname', 'Middlename', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('con_pass', 'Confirm Password', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $d['error'] = '';
            $this->load->view('admin/add_admin', $d);
        }
        else
        {
            $password = $this->input->post('password');
            $con_pass = $this->input->post('con_pass');
            if($password == $con_pass)
            {
                $config['upload_path']          = './assets/uploads/';
                // check if the attachment belongs to image
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);

                if($this->upload->do_upload())
                {
                    $data['fname']      = ucwords($this->input->post('fname'));
                    $data['lname']      = ucwords($this->input->post('lname'));
                    $data['mname']      = ucwords($this->input->post('mname'));
                    $data['gender']     = $this->input->post('gender');
                    $data['bday']       = $this->input->post('bday');
                    $data['address']    = ucwords($this->input->post('address'));
                    $data['username']   = $this->input->post('username');
                    $data['password']   = password_hash($password, PASSWORD_BCRYPT);
                    $data['pic']        = $this->upload->data('file_name');
                    $data['type']       = 'admin';
                    $data['contact']    = $this->input->post('contact');
                    $this->db->insert('users', $data);
                    redirect('/add_admin');
                }
                else
                {
                    $d['error'] = '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
                    $this->load->view('admin/add_admin', $d);
                }
            }
            else
            {
                $d['error'] = '<div class="alert alert-danger">Please confirm your password</div>';
                $this->load->view('admin/add_admin', $d);
            }
        }
    }

    function view_prev()
    {
        $this->load->helper('typography');
        $this->load->view('user/view_prev');
    }

    function prev_user()
    {
        $this->load->helper('typography');
        $this->load->view('view_prev');
    }

    function show_logs()
    {
        $this->load->view('user/logs');
    }

    function get_logs()
    {
        $this->load->helper('date');
        $date_from  = $this->input->post('date_from');
        $date_to    = $this->input->post('date_to');
        $user       = $this->input->post('user');
        $range      = date_range($date_from, $date_to);
        $template   = '';
        $template   .= '<tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Activity</th>
                            <th>User</th>
                        </tr>';
        foreach($range as $date)
        {
            $l = $this->db->query("SELECT fname, lname, ddate, ttime, activity
                                FROM logs a, users b
                                WHERE b.id = a.user AND ddate = '$date'
                                AND (fname LIKE '%$user%' OR lname LIKE '%$user%')")->result_array();

            foreach($l as $logs)
            {
                $template   .= '<tr>
                                    <td>'.$date.'</td>
                                    <td>'.$logs['ttime'].'</td>
                                    <td>'.$logs['activity'].'</td>
                                    <td>'.$logs['fname'].' '.$logs['lname'].'</td>
                                </tr>';
            }
        }
        echo $template;
    }

    function forgot()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('answer', 'Answer', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $d['error'] = '';
            $this->load->view('user/forgot', $d);
        }
        else
        {
            $username = $this->input->post('username');
            $u = $this->db->get_where('users', array('username' => $username))->row_array();
            if($this->input->post('secret_q') == $u['question'] AND $this->input->post('answer') == $u['answer'])
            {
                $pass               = $this->input->post('password');
                $pass               = password_hash($pass, PASSWORD_BCRYPT);
                $data['password']   = $pass;
                $this->db->where('username', $username);
                $this->db->update('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-info text-center">Your password has been reset to <strong>'.$pass.'</strong></div>');
                redirect(base_url());
            }
            else
            {
                $d['error'] = '<div class="alert alert-danger">Invalid</div>';
                $this->load->view('user/forgot', $d);
            }
        }
    }
}
