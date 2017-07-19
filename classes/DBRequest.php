<?php

    //include "DBAccess.php";

class DBRequest {


    public function fetchAll($link, $tab_name){        //выберает всю информацию из указаной таблицы
        $query = mysqli_query($link, "SELECT * FROM `$tab_name`");
        $data = mysqli_fetch_all($query, 1);
        return $data;
    }

    public function fetchOne($link, $tab_name){
        $query = mysqli_query($link, "SELECT * FROM `$tab_name` WHERE `user_id` = 2");
        $data = mysqli_fetch_row($query);                                   // перевести простой массив в ассоциативный
        return $data;
    }

    public static function reg_user($link, $data){ // записывает онформацию о регистрации в базу
      $query = mysqli_query($link, "INSERT INTO `users` (`lastname`, `firstname`, `middlename`, `email`, `password`, `role_id`, `login`, `function`)
                                   VALUES ('".$data['lastname']."',
                                           '".$data['firstname']."',
                                           '".$data['middlename']."',
                                           '".$data['email']."',
                                           '".$data['password']."',
                                           '".$data['character']."',
                                           '".$data['login']."',
                                           '".$data['function']."')");
    }

    public static function loginCheck($link, $login) { // проверяет дщгин при регистрации
        $query = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '" . $login . "'");
        return !! $query->num_rows;
    }

    public static function emailCheck($link, $email) { // проверяет имейл при регистрации
        $query = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '" . $email . "'");
        return !! $query->num_rows;
    }

    public static function signInCheck($link, $login, $password) { // проверяет логирование в системе
        $query = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '" . $login . "' AND `password` = '" . $password . "'");
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public static function dashbordFullData($link, $user_id) {
      $query = mysqli_query($link, "SELECT * FROM `application`
                                    WHERE `user_id` = '" . $user_id . "' AND `app_status` != `5`");
      $data = mysqli_fetch_assoc($query);
      return $data;
    }

    public static function selectData($link, $table) { //выберает данные в селекты
      $query = mysqli_query($link, "SELECT DISTINCT * FROM `" . $table . "`");
        while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
          $result[] = $data;
        }
      return $result;
    }

    public static function urgencyTime($time) { // расчет времени
      $result = time() + $time;
      return $result;
    }

    public static function appIncert($link, $app_data, $user_data) {
      $query = mysqli_query($link, "INSERT INTO `application` (`app_id`,
                                                              `user_id`,
                                                              `app_date`,
                                                              `app_author`,
                                                              `app_deadline`,
                                                              `app_status`,
                                                              `app_prev_approval`,
                                                              `app_description`,
                                                              `app_type`,
                                                              `country`,
                                                              `area`,
                                                              `region`,
                                                              `oblast`,
                                                              `city`,
                                                              `spv`,
                                                              `business_builder`,
                                                              `tse`,
                                                              `customer_code`,
                                                              `customer_reg_name`,
                                                              `trade_category`,
                                                              `customer_subtype`,
                                                              `customer_address`)
                                    VALUES ('NULL',
                                          '".$user_data['logged_user']['user_id']."',
                                            'NULL',
                                          '".$user_data['logged_user']['lastname']."',
                                          '".$app_data['app_deadline']."',
                                            'NULL',
                                            'NULL',
                                          '".$app_data['description']."',
                                          '".$app_data['app_type']."',
                                          '".$app_data['country']."',
                                          '".$app_data['area']."',
                                          '".$app_data['region']."',
                                          '".$app_data['province']."',
                                          '".$app_data['city']."',
                                          '".$app_data['supervisor']."',
                                          '".$app_data['buss_builders']."',
                                          '".$app_data['teritory_supervisor']."',
                                            'NULL',
                                          '".$app_data['customer_name']."',
                                          '".$app_data['trade_category']."',
                                            'NULL',
                                          '".$app_data['customer_address']."'
                                              )");
      return true;
    }

    // public static function appDelete($link, $user_id, $app_id) {
    //   if ($user_id == ) {
    //     # code...
    //   }
    // }

}


 // $r = new DBRequest();
 // $t = $r->selectData("86400");
 // echo $t;
 // echo "  ";
 // echo time();

 //  foreach ($t as $key => $value) {
 //     echo "<pre>";
 //     print_r($key);
 //     echo "</pre>";
 //  }

 ?>
