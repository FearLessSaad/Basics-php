<?php

$var1 = "I am a Good Boy.";
$var2 = "Waleed Is A Good Boy.";
$var3 = "Zeshi Is A Bad Boy.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h1><?php echo $var1; ?></h1>
    <h1><?php echo strlen($var1); ?></h1>
    <h1><?php echo str_word_count($var2); ?></h1>
    <h1><?php echo strrev($var3); ?></h1>
    <h1><?php echo str_replace("Bad", "Good", $var3); ?></h1>
</body>
</html>