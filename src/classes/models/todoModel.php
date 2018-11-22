<?php

namespace classes\models;


class todoModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }


    public function displayAllTodos() {
        $query = $this->db->prepare("SELECT `to_do_name` FROM `todos`;");
        $query->execute();
        return $query->fetchAll();
    }

    public function completeTodo($id) {
        $query = $this->db->prepare("UPDATE `todos` SET `complete` = 1 WHERE `id` =:id;");
        $query->bindParam('id',$id);
        $query->execute();
        return $query->fetchAll();
    }
}