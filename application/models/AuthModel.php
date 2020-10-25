<?php

class AuthModel extends CI_Model
{
    public function registerUser($data)
    {
        return $this->db->insert('customers', $data);
    }


    public function getUserByEmail($email)
    {
        return $this->db->get_where('customers', ['email' => $email])->row_array();
    }

    public function registerAdmin($data)
    {
        return $this->db->insert('admin', $data);
    }

    public function getAdminByEmail($email)
    {
        return $this->db->get_where('admin', ['email' => $email])->row_array();
    }
}
