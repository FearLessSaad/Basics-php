<?php

if (isset($_POST['email']) && isset($_POST['pass'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($email == "saadp791@gmail.com" && $pass == "SaadIsBest") {

        session_start();
        $_SESSION['login'] = $email;

        header("Location: /dashboard.php");
        
    } else {
        echo "<h1>Incorrect Email OR Password!</h1>";
    }

}else{
    echo "POST Data Not Found!";
}
