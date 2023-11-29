<?php

include __DIR__ . '/Model/db.php';
//var_dump($hotels);
if (isset($_GET['parking'])){
    $parking = $_GET['parking'];
    $temp=[];
    $hotels = array_filter($hotels,  fn($item) => $parking === 'all' || $item['parking'] == $parking);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Hotel</title>
</head>

<body>
    <header class="container text-center my-3">
        <h1 class="text-uppercase">Prenota il tuo hotel</h1>
        <form class="d-flex"  method="GET" action="index.php">
        <select class="form-control me-2" placeholder="Search" aria-label="Search" name="parking">
          <option value="all">All</option>
          <option value="0">Parking not available</option>
          <option value="1">Parking available</option> 
        </select>
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </header>
    <main>
        <div class="container text-center my-3">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Parking</th>
                                <th scope="col">Vote</th>
                                <th scope="col">Distance to Center</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr>
                                <th scope="row"><?php echo $hotel['id']?></th>
                                <td><?php echo $hotel['name']?></td>
                                <td><?php echo $hotel['description']?></td>
                                <td><?php echo ($hotel['parking'] ? 'Yes' : 'No')?></td>
                                <td><?php echo $hotel['vote']?>/5</td>
                                <td><?php echo $hotel['distance_to_center']?> Km</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>