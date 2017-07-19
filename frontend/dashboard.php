<?php
include '../classes/DBAccess.php';
include '../classes/DBRequest.php';

  //echo <pre>;
  print_r($_POST);
  //echo </pre>;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PMI Workflow</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="body">
    <span class="logo_index"><img height="100" width="200" src="../image/pmibig.png"></span>
    <div class="container_dashboard">
        <header>
            <div class="nav_bar_index">
                <span class="icon"><img src="../image/ic_person.svg">
                </span> <span class="authorazed"><?php echo $_SESSION['logged_user']['login']?></span>
                <a href="index.php">home</a>
                <a href="logedout.php">sign out</a>
                <a href="spec.php">specification</a>
                <a href="about.php">about</a>
            </div>
        </header>
        <main class="main">
            <aside class="navbar_dashboard">
                <a href="app.php">new app</a>
                <a href="newitem.php">new items</a>
                <a href="stock.php">stock</a>
                <a href="report.php">report</a>
                <a href="archive.php">app archive</a>
                <a href="profile.php">profile</a>
                <a href="options.php">options</a>
            </aside>
            <table class="table_dashboard">
                <tr id="table">
                    <th>#</th>
                    <th>Date |</th>
                    <th>Region |</th>
                    <th>Application type |</th>
                    <th>Description |</th>
                    <th>Author |</th>
                    <th>Previous approval |</th>
                    <th>Lead time |</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>

                <?php
                    if ($data = DBRequest::selectData($__conn, "application")) {
                        foreach ($data as $key => $value) { ?>
                        <tr class="data_cell">
                            <td><?=$value['app_id']?></td>
                            <td><?=$value['app_date']?></td>
                            <td><?=$value['region']?></td>
                            <td><?=$value['app_type']?></td>
                            <td><?=$value['app_description']?></td>
                            <td><?=$value['app_author']?></td>
                            <td><?=$value['app_prev_approval']?></td>
                            <td>qwerty123</td>
                            <td><?=$value['app_status']?></td>
                            <td><a class="table_option" href="app_detail.php"><img src="../image/ic_eye.svg"></a>
                                <a class="table_option" href="app_edit.php"><img src="../image/ic_black.svg"></a>
                                <a class="table_option" href="app_delete.php"><img src="../image/ic_cancel.svg"></a>
                            </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </main>
        <footer>
            <span class="copyright">&copy 2017 alex slavko. all right reserved</span>
        </footer>
    </div>
</body>
</html>
