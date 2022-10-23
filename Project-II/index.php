<?php

$error = false;

$users = [
    [
        "email" => "saadp791@gmail.com",
        "pass" => "saad123"
    ],
    [
        "email" => "zeshi@gmail.com",
        "pass" => "zeshi123"
    ],
    [
        "email" => "waleed@gmail.com",
        "pass" => "waleed123"
    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    foreach($users as $user){

        if($user["email"] == $email && $user["pass"] == $pass){

            echo "Logged In Successfully.";
            $error = false;
            break;

        }else{

            $error = true;

        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ghostx | Proj-II</title>
</head>
<body>
    <div class="w-[40%] mx-auto px-5 my-6 bg-gray-200 rounded-lg">
        <form method="post">
            <h1 class="pt-3 text-3xl font-bold">Login</h1>
            <?php if ($error) : ?>
                <div class="px-4 py-2 mt-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">Failed!</span> Incorrecte Email Or Password.
                </div>
            <?php endif; ?>
            <input type="emial" name="email" class="w-full mt-2 px-2 py-1 rounded-md hover:shadow-md" placeholder="Enter Email Address">
            <input type="password" name="pass" class="w-full mt-2 px-2 py-1 rounded-md hover:shadow-md" placeholder="Enter Password">
            <button type="submit" class="w-full mt-2 mb-5 py-1 bg-blue-700 text-white font-bold rounded-md hover:bg-blue-800">Login</button>
        </form>
    </div>
</body>
</html>