<?php

class fruits {
    public function __construct($parent) {
        $this->db = $parent->db;
    }

    //2nd par optional, default value if not provided
    public function select($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);

        //execute stmt for connection
        $this->sql->execute($value);

        //object for results, if exist
        $data = $this->sql->fetchAll();

        return $data;
    }

    public function add($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
    }

    public function delete($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
    }

    public function update($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $this->sql->execute($value);
    }
}


?>
