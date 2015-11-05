<?php

class Announce extends CI_Model
{
    function latest()
    {
        return $this->db->query("SELECT * FROM announcement 
        	WHERE id = (
        		SELECT max(id) FROM announcement WHERE confirmed = 1)")->row_array();
    }
}
