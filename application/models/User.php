<?php

class User extends CI_Model
{
    function login($username, $password)
    {
        $this->db->where('username', $username);
        $user = $this->db->get('users')->result_array();

        foreach ($user as $val) {

            if(password_verify($password, $val['password']) AND $val['username'] == $username)
                return $val['id'];
        }

        return FALSE;
    }
}
