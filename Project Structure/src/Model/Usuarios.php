<?php

namespace Model;

class Usuarios

{
    protected $db;

    public function __construct(\MySqli $db)
    {

        $this->db = $db;
    }


    public function getAllUsuarios()
    {
        return $this->db->query('SELECT * FROM Usuarios');
    }


    public function getAllEmails()
    {
        return $this->db->query('SELECT * FROM emails');
    }
}

?>