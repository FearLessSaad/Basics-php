<?php

    $name = "GhostX";
    
    $h1 = "Heading 1";
    $h2 = "Heading 2";
    $h3 = "Heading 3";

    $email = "saadp791@gmail.com";

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?></title>
</head>
<body>
    
    <h1><?php echo $h1; ?></h1>
    <h2><?php echo $h2; ?></h2>
    <h3><?php echo $h3; ?></h3>

    <?php
        if($email == "saadp791@gmail.com"){
            echo "<h1>Correct</h1>";
        }else{
            echo "<h1>Incorrect Email!</h1>";
        }
    ?>

    <?php if($email == "saadp791@gmail.com") : ?>
        <h1>Correct</h1>
        <h1>I am Another Message</h1>
    <?php else : ?>
        <h1>Incorrect Email!</h1>
    <?php endif; ?>


</body>
</html>