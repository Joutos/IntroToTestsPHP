<?php

namespace MyFramework\DataBase;

use MyFramework\DataBase;

class ORM
{

    private $db;

    public function __construct(DataBase\DataBase $dataBase)
    {
        $this->db = $dataBase;
    }

    public function findAll($table)
    {
        $result = $this->db->query("SELECT * FROM $table")->fetchAll();
        return $result;
    }

    public function findByID($table, $id)
    {
        $primaryKeyColumn = $this->db->query("SHOW KEYS FROM $table")->fetchAll()[0]['Column_name'];

        $result = $this->db->query("SELECT * FROM $table WHERE $primaryKeyColumn = $id")->fetchAll();
    }

    public function persist($object)
    {
        // persist implementation
    }
}
