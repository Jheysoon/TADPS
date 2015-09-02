<?php

class Announce extends CI_Model
{
    function latest()
    {
        return $this->db->query("SELECT * FROM announcement WHERE id = (SELECT max(id) FROM announcement)")->row_array();
    }
}
