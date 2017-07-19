<?php

    class DBAccess {

        public $mysqli;

        public function __construct(){
            $this->mysqli = new mysqli('localhost', 'root', 'slavko84', 'workflow');
        }

    }

    $db_access = new DBAccess();
    $__conn = $db_access->mysqli; // подключение к БД присвоено переменной $__conn
                                  // через создание экземпляра $db_access z класса DBAccess

    session_start();

?>

<!-- 'localhost', 'spacious', 'spacious', 'workflow' -->