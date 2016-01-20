<ul class="list-group">
    <?php
        if($this->session->userdata('type') == 'admin')
        {
            $this->db->where('type !=', 'admin');
        }
        elseif($this->session->userdata('type') == 'ngo')
        {
            $this->db->where('type', 'admin');
            //$this->db->where('id !=', $this->session->userdata('id'));
            //$this->db->or_where('type', 'ngo');
        }
        else
        {
            $this->db->where('type', 'admin');
        }
        $r = $this->db->get('users')->result_array();
        foreach ($r as $user)
        {
            if($this->session->userdata('id') != $user['id'])
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

            $this->db->where('user_from', $user['id']);
            $this->db->where('user_to', $this->session->userdata('id'));
            $this->db->where('status', 0);
            $count = $this->db->count_all_results('chats');
         ?>
         <span class="badge"><?php echo $count == 0 ? '':$count ?></span>
    </a>
    <?php
            }
        }
        if($this->session->userdata('type') == 'admin') {
    ?>
     <a href="#" data-user="0" class="list-group-item chat_user" style="background-color: #d9edf7;">
         <strong>
             Send To All
         </strong>
     </a>
     <?php } ?>
</ul>
