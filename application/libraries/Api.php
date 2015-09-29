<?php

class Api
{

    function insert_logs($message)
    {
        $CI =& get_instance();
        $CI->load->helper('date');
        $d['ddate']     = date('Y-m-d');
        $d['ttime']     = mdate('%h:%i %a');
        $d['activity']  = $message;
        $d['user']      = $CI->session->userdata('id');
        $CI->db->insert('logs', $d);
    }
}
