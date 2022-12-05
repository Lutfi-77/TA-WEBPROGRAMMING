<?php
require 'functions.php';

$data = getData("SELECT * FROM ticket");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="navbar-brand">
                Nusman <span style="color: #99C2FF;">Trip</span>
            </div>
            <nav class="nav-menu">
                <div class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </div>
                <div class="nav-item">
                    <a href="pesan.php" class="nav-link">Booking</a>
                </div>
                <div class="nav-item">
                    <a href="team.php" class="nav-link">Our Team</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="table">
        <table>
            <thead>
                <tr>
                    <th scope="col">Fullname</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">No. of Passengers</th>
                    <th scope="col">Class</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $customer) : ?>
                    <tr>
                        <td><?= $customer['fullname'] ?></td>
                        <td><?= $customer['from_airport'] ?></td>
                        <td><?= $customer['to_airport'] ?></td>
                        <td><?= $customer['jml_passenger'] ?></td>
                        <td><?= $customer['class'] ?></td>
                        <td><?= $customer['price'] ?></td>
                        <td><?= $customer['date'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</body>

</html>