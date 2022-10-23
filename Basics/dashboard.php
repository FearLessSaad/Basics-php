<?php

session_start();

if(isset($_SESSION['login'])){
    echo "<h1>Welcome Here</h1>";
    echo "<h1>".$_SESSION['login']."</h1>";
}else{
    die("Un Authorized User. Access Forbidden!");
}
?>


<form action="logout.php">
    <button type="submit">Logout</button>
</form>
