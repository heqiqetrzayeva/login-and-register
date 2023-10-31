<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
 
    public function registerUser($data)
    {
        return $this->db->insert($data); 
    }

    public function checkPassword($password)
    {
        $this->db->query("SELECT * FROM users WHERE password='$password'");
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else
        {
            return false;

        }
    }

    
}
