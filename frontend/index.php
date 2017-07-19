<?php
    include '../classes/DBAccess.php';
    require '../classes/Authorization.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PMI Workflow</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="../css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

<body class="body">
<span class="logo_index"><img height="100" width="200" src="../image/pmibig.png"></span>
    <div class="logo_container_index">


    <div class="container_index">

        <header class="header_index">
        
            <div class="nav_bar_index">
            
            
                <?php if (isset($_SESSION['logged_user'])) {?>
                   <span class="icon"><img src="../image/ic_person.svg"></span> <span class="authorazed"><?php echo $_SESSION['logged_user']['login']?></span>
                    <a class="a_index" href="logedout.php">sign out</a>
                    <a class="a_index" href="dashboard.php">dashboard</a>
                    <a class="a_index" href="spec.php">specification</a>
                 <?php } else { ?>
                    <a class="a_index" href="signin.php">sign in</a>
                    <a class="a_index" href="reg.php">sign up</a>
                    <a class="a_index" href="about.php">about</a>
                    <a class="a_index" href="#">contact</a>
                <?php 
                } 
                ?>

            </div>

        </header>

        <main>
            <span class="iqos_text"><img src="../image/1216-1493181853.png"></span><span class="iqos"><img src="../image/iqos_detailed.png"></span>
        </main>

        <footer class="footer_index">

            <span class="copyright">&copy 2017 alex slavko. all right reserved</span>

        </footer>
    </div>
    </div>
</body>

</html>
