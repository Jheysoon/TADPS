<ul class="list-group">
    <?php
        if($this->session->userdata('type') == 'admin')
        {
            $this->db->where('type !=', 'admin');
        }
        elseif($this->session->userdata('type') == 'ngo')
        {
            $this->db->where('type', 'admin');
            $this->db->where('id !=', $this->session->userdata('id'));
            $this->db->or_where('type', 'ngo');
        }
        else
        {
            $this->db->where('type', 'admin');
        }
        $r = $this->db->get('users')->result_array();
        foreach ($r as $user)
        {
        ?>
    <a href="#" data-user="<?php echo $user['id'] ?>" class="list-group-item chat_user">
        <?php
            $office = '';
            if(! empty($user['office']))
            {
                $office = '('.$user['office'].')';
            }
            echo $user['fname'].' '.$user['lname'].' '.$office;
         ?>
    </a>
    <?php
        }
     ?>
</ul>
