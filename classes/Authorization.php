<?php

    require_once 'DBAccess.php';

class Auth
{

    public function emailUnique($link, $email){ // проверяет адрес эл. почты на уникальность (существует или нет) в БД
            if (isset($email) && $email != "") {
                $query = mysqli_query($link, "SELECT `email` FROM `users` WHERE `email` = '".$email."'");
                $result = mysqli_fetch_array($query);
                if ($result['email'] == $email) {
                    $status = true;
                } else {
                    $status = false;
                }
            } else {
                echo "Required parameter is not received";
            }
            return $status;
    }



    public function passCheck($link, $pass, $email){ //провер. соответ. пороля введенн. с парол. в БД присвоен. соответ. имейл
           $query = mysqli_query($link, "SELECT `password`, `email` 
                                         FROM `users` 
                                         WHERE `email` = '".$email."' AND `password` = '".$pass."'");
           $result = mysqli_fetch_array($query);
           if($result['password'] == $pass) {
                    $status = true;
                } else {
                    $status = false;
                }
           return $status;
    }

    public function emailValidation($email){
        if ($t = preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $email)) {
            return $t;
        } else {
            return $t;
        }
    }

    public function passValidation(){

    }
}


$e = new Auth();
print_r($e->passCheck($__conn, "1", "slavko.alexandr@gmail.com"));




?>


