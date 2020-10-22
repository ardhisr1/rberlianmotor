<?php 

class AuthModel extends CI_Model{
    public function registerUser($data)
    {
        return $this->db->insert('customers', $data);
    }

    public function getUserByEmail($email)
    {
        return $this->db->get_where('customers', ['email' => $email])->row_array();
    }
}