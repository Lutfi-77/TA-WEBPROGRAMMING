<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&display=swap" rel="stylesheet">
    <title>Test</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pesan.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="navbar-brand">
                Nusman <span style="color: #99C2FF;">Trip</span>
            </div>
            <nav class="nav-menu">
                <div class="nav-item">
                    <a href="index.php">Home</a>
                </div>
                <div class="nav-item">
                    <a href="pesan.php">Booking</a>
                </div>
                <div class="nav-item">
                    <a href="team.php" class="nav-link">Our Team</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="input-cover">
            <div class="input-section">
                <form action="" method="post" style="width: 100%;">
                    <div class="input-group">
                        <label class="input-label">Fullname</label>
                        <input type="text" name="fullname" class="input-form" placeholder="Fullname">
                    </div>

                    <div class="input-group">
                        <label class="input-label">From</label>
                        <input type="text" name="from" class="input-form" placeholder="From Airport">
                    </div>

                    <div class="input-group">
                        <label class="input-label">To</label>
                        <select class="input-form" name="to_airport">
                            <?php if (isset($_GET['destination']) && !empty($_GET['destination'])) : ?>
                                <option value="<?= $_GET['destination'] ?>"><?= $_GET['destination'] ?></option>
                            <?php else : ?>
                                <option value="bali">Bali</option>
                                <option value="maladewa">Maladewa</option>
                                <option value="tokyo">Tokyo</option>
                                <option value="china">China</option>
                                <option value="venice">Venice</option>
                                <option value="india">India</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="input-group">
                        <label class="input-label">Tanggal Keberangkatan</label>
                        <input type="date" name="date" class="input-form" placeholder="fullname">
                    </div>

                    <div class="flex" style="width: 100%;">
                        <div class="input-group" style="width: 100%;">
                            <label class="input-label">No. of Passengers</label>
                            <input type="text" id="nopass" name="no_pass" class="input-form" placeholder="Ex: 1">
                        </div>

                        <div class="input-group" style="width: 100%;">
                            <label class="input-label">Class</label>
                            <select name="class" class="input-form">
                                <option value="economy">Economy</option>
                                <option value="business">Business</option>
                                <option value="first class">First class</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="input-label">Price</label>
                        <?php if (isset($_GET['price']) && !empty($_GET['price'])) : ?>
                            <input type="text" name="price" class="input-form" value="<?= $_GET['price'] ?>" id="price">
                        <?php else : ?>
                            <input type="text" name="price" class="input-form" value="<?= 1000000 ?>" id="price">
                        <?php endif; ?>
                    </div>

                    <button class="save-button" name="save">Save Order</button>
                    <a href="table.php" class="save-button" name="save">Table Order</a>
                </form>
            </div>

            <div class="invoice">
                <img src="https://media.istockphoto.com/vectors/banner-poster-flyer-with-airplane-seats-plan-business-and-economy-vector-id905400868?k=20&m=905400868&s=612x612&w=0&h=OYj8CXPd3FqJ6Dz5BC8dj08n_rwBc7w03AWCQ_jm_T8=" class="invoice-img">
            </div>
        </div>
    </section>
    <script>
        const nopas = document.getElementById('nopass');
        nopas.addEventListener('change', function(e) {
            let price = document.getElementById('price').value;
            var newPrice = price * nopas.value;
            document.getElementById('price').value = newPrice;
        })
    </script>
    <script src="js/sweetalert.js"></script>
</body>

</html>

<?php
require 'functions.php';

if (isset($_POST['save'])) {
    if (store($_POST) > 0) {
        echo "<script>Swal.fire(
            'Success!',
            'Data berhasil ditambahkan!',
            'success'
          )</script>";
    } else {
        echo "
        <script>Swal.fire('Any fool can use a computer')</script>
        ";
    }
}

?>