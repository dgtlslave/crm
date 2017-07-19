<?php

    include '../parameters/params.php';
    include '../classes/DBAccess.php';

    $connect = new DBAccess();

    $connect->mysqli(
        $params['database']['host'],
        $params['database']['user'],
        $params['database']['password'],
        $params['database']['database']
    );


?>


