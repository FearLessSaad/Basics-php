<?php

$data = "";

// $arr = [
//     "text" => "I am Saad",
//     "name" => "Saad",
// ];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = $_POST["text"];
    $data = htmlspecialchars($data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ghosts | Proj-I</title>
</head>

<body>

    <h1 class="text-3xl text-center mt-2">Ghosts Proj-I</h1>
    <div class="mt-3 w-[70%] mx-auto">
        <form method="post">
            <div class="text-sm font-bold">Enter Your Text Here</div>
            <textarea rows="5" name="text" class="px-2 py-1 w-full border-2 border-black border-solid rounded-lg focus:outline-none focus:shadow-2xl" placeholder="Enter Your Text Here"></textarea>
            <button type="submit" class="w-full mt-2 py-1 bg-black text-white font-bold rounded-lg">Process</button>
        </form>
    </div>

    <div class="mt-3 w-[70%] mx-auto px-2 py-1 border-2 border-black border-solid rounded-lg">
        <div class="text-sm font-bold">Output:</div>
        <hr class="mb-2">
        <div>
            <span class="text-sm">Number Of Character: </span>
            <span class="text-md"><?php echo strlen($data); ?></span>
        </div>
        <div class="mt-2">
            <span class="text-sm">Number Of Words: </span>
            <span class="text-md"><?php echo str_word_count($data); ?></span>
        </div>
        <div class="mt-2">
            <span class="text-sm">Real Data: </span>
            <span class="text-md"><?php echo $data; ?></span>
        </div>
        <div class="mt-2">
            <span class="text-sm">Data In Upper Case: </span>
            <span class="text-md"><?php echo strtoupper($data);?></span>
        </div>
        <div class="mt-2">
            <span class="text-sm">Data In Lower Case: </span>
            <span class="text-md"><?php echo strtolower($data);?></span>
        </div>
    </div>

    <div class="mt-3 w-[70%] mx-auto">
        <form method="post">
            <input type="hidden" value="" name="text" class="px-2 py-1 w-full border-2 border-black border-solid rounded-lg focus:outline-none focus:shadow-2xl">
            <button type="submit" class="w-full mt-2 py-1 bg-black text-white font-bold rounded-lg">Clear</button>
        </form>
    </div>

</body>

</html>