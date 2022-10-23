<?php

$arr = ["Saad", "Waleed", "Zeshi", "Arshamn", "Hussnain", "Ahmar", "Nida", "Hassan", "Ayesha", "Baddar", "Noor"];

array_push($arr, "Zohaib");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
</head>
<body>
    
    <?php

        foreach($arr as $i){
            echo "<h1>$i</h1>";
        }

    ?>

</body>
</html>

<?php


function sum($a, $b)
{
    return $a+$b;
}

function mul($a, $b){
    return $a*$b;
}

$c = mul(sum(10, 20), 2);

echo $c;