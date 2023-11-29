<?php

include __DIR__. '/Model/db.php';
//var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Hotel</title>
</head>
<body>
    <div class="container text-center my-3">
        <?php foreach($hotels as $hotel){
            echo "<div>$hotel[name] $hotel[description] $hotel[parking] $hotel[vote] $hotel[distance_to_center]</div> ";
        } ?>
    </div>
</body>
</html>