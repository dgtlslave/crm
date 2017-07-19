<?php
    include "../classes/DBAccess.php";
    include "../classes/DBRequest.php";

    if (isset($_POST['do_signup'])) {

        $errors = array();
        if (trim($_POST['login']) == "") {
            $errors[] = "Enter your login, please.";
        }
        if (DBRequest::loginCheck($__conn, $_POST['login']) == true) {
            $errors[] = "User with current login already exists.";
        }
        if (trim($_POST['firstname']) == "") {
            $errors[] = "Enter your name, please.";
        }
        if (trim($_POST['lastname']) == "") {
            $errors[] = "Enter your lastname, please.";
        }
        if (trim($_POST['middlename']) == "") {
            $errors[] = "Enter your middle name? plese.";
        }
        if (DBRequest::emailCheck($__conn, $_POST['email']) == true) {
            $errors[] = "Current e-mail already exists..";
        }
        if ($_POST['character'] == "Choose scope") {
            $errors[] = "Choose your character.";
        }
        if ($_POST['function'] == "Choose function") {
            $errors[] = "Choose your function.";
        }
        if ($_POST['password'] == "") {
            $errors[] = "Enter password, please.";
        }
        if ($_POST['password_2'] != $_POST['password']) {
            $errors[] = "The second password is not equal to the first password, please check and repet.";
        }
        if (empty($errors)) {
            DBRequest::reg_user($__conn, $_POST);
            echo "<div class=\"reg_succss\">Registration successful. <a href=\"index.php\">Get started</a></div>";
        }
        else {
            echo "<div class=\"sign_up_mssg\">".array_shift($errors)."</div>";
        }
    }

?>

<form action="reg.php" method="POST">
    <p>
        <label for="login">Login</label>
        <input type="text" name="login" placeholder="login..." value = "<?php echo @$_POST['login'];?>">
    </p>
    <p>
        <input type="text" name="firstname" placeholder="First name..." value = "<?php echo @$_POST['firstname'];?>">
    </p>
    <p>
        <input type="text" name="lastname" placeholder="Last name..." value = "<?php echo @$_POST['lastname'];?>">
    </p>
    <p>
        <input type="text" name="middlename" placeholder="Middle name..." value = "<?php echo @$_POST['middlename'];?>">
    </p>
    <p>
        <input type="email" name="email" placeholder="email..." value = "<?php echo @$_POST['email']?>">
    </p>
    <p>
      <select class="character" name="character">
        <option value="1">Choose scope</option>
        <option value="2">Character 1</option>
        <option value="3">Character 2</option>
        <option value="4">Character 3</option>
      </select>
    </p>
    <p>
      <select class="function" name="function">
        <option value="1">Choose function</option>
        <option value="2">Function 1</option>
        <option value="3">Function 2</option>
        <option value="4">Function 3</option>
      </select>
    </p>
    <p>
        <input type="password" name="password" placeholder="pass...">
    </p>
    <p>
        <input type="password" name="password_2" placeholder="pass_2...">
    </p>
    <p>
        <button type="submit" name="do_signup">Sign up</button>
    </p>
</form>
