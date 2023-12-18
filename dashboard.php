<?php
include 'koneksi.php';
// Mengambil data dari tabel kontrol
$sql = "SELECT * FROM tb_suhu2 ORDER BY id_suhu1 DESC LIMIT 1";
// $sql = "SELECT * FROM kontrol
// WHERE temperature > (SELECT AVG(temperature) FROM kontrol);";
$result = $conn->query($sql);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="img/png" href="asset/home.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>
    <script src="script.js">
    </script>
</head>

<body>

    <header>
        <div class="container">
            <h1>Dashboard Monitoring</h1>
            <div class="datetime" id="datetime"></div>
        </div>
        <a href="menu_utama.php" type="button" class="btn btn-dark">
            <i class="fa fa-home"></i>
            Database Management</a>
    </header>
    </header>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card-container text-center">';
            echo '<div class="card" style="width: 28rem; height: 20rem;">';
            echo '<div class="row">';
            echo '<div class="col">';
            echo '<img src="asset/suhu.png" class="card-img-top" alt="temperature" width="1px">';
            echo '<h5>TEMPERATURE</h5>';
            echo '<h3>' . $row['temperature'] . '&deg</h3>';
            echo '</div>';
            echo '<div class="col">';
            echo '<img src="asset/rintik.png" class="card-img-top" alt="humidity" width="1px">';
            echo '<h5>HUMIDITY</h5>';
            echo '<h3>' . $row['humidity'] . '%</h3>';
            echo '</div>';
            echo '</div>';

            echo '<div>';
            echo '<div class="col">';
            echo '<img src="asset/wave.png" class="card-img-top" alt="ac" width="1px">';
            echo '<h5>AIR CONDITIONER</h5>';
            echo '<label class="switch">';
            echo '<input type="checkbox" id="togBtn" ' . (($row['ac'] == 1) ? 'checked' : '') . '>';
            echo '<div class="slider round">';
            echo '<span class="on">ON</span>';
            echo '<span class="off">OFF</span>';
            echo '</div>';
            echo '</label>';

            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="card" style="width: 24rem; height: 20rem;">';
            echo '<div>';
            echo '<img src="asset/electric.png" class="card-img-top" alt="electric" width="1px">';
            echo '<h5>ELECTRICITY</h5>';
            echo '<h3>' . $row['electric'] . '<sup>kw</sup></h3>';
            echo '<img src="asset/wave.png" class="card-img-top" alt="wave" width="1px">';
            echo '</div>';

            echo '<div class="container">';

            echo '<div class="row">
                    <div class="col">
                        <h5>This Month</h5>
                        <h5>' . $row['electric'] . '<sup>kw</sup></h5>
                        </div>
                    <div class="col">
                        <h5>Today</h5>
                        <h5>' . $row['electric'] . '<sup>kw</sup></h5>
                        </div>
                </div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="card" style="width: 24rem; height: 20rem;">';
            echo '<div>';
            echo '<img src="asset/water.png" class="card-img-top" alt="water" width="1px">';
            echo '<h5>' . $row['water'] . '</h5>';
            echo '<h3>' . $row['water'] . '<sup>m<sup>3</sup></sup></h3>';
            echo '<img src="asset/wave.png" class="card-img-top" alt="wave" width="1px">';
            echo '</div>';

            echo '<div class="row">
                <div class="col">
                    <h5>This Month</h5>
                    <h5>' . $row['water'] . '<sup>m<sup>3</sup></sup></h5>
                </div>
                <div class="col">
                    <h5>Today</h5>
                    <h5>' . $row['water'] . '<sup>m<sup>3</sup></sup></h5>
                </div>
            </div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="card-container">';
            echo '<div class="card" style="width: 28rem; height: 20rem;">';

            echo '<div class="card" style="width: 23rem; height: 6rem;">';
            echo '<div class="row">';
            echo '<div class="col">';
            echo '<h3><img src="asset/wifi.png" class="card-img-top" alt="wifi" width="1px">WI-FI
                        </h3>';

            echo '</div>';

            echo '<div class="col">';
            echo '<label class="switch">';
            echo '<input type="checkbox" id="togBtn" ' . (($row['wifi'] == 1) ? 'checked' : '') . '>';
            echo '<div class="slider round">';
            echo '<span class="on">ON</span>';
            echo '<span class="off">OFF</span>';
            echo '</div>';
            echo '</label>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="card" style="width: 23rem; height: 6rem;">';
            echo '<div class="row">';
            echo '<div class="col">';
            echo '<h3><img src="asset/alarm.png" class="card-img-top" alt="alarm" width="1px"> ALARM
                        </h3>';

            echo '</div>';
            echo '<div class="col">';
            echo '<label class="switch">';
            echo '<input type="checkbox" id="togBtn" ' . (($row['alarm'] == 1) ? 'checked' : '') . '>';
            echo '<div class="slider round">';
            echo '<span class="on">ON</span>';
            echo '<span class="off">OFF</span>';
            echo '</div>';
            echo '</label>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="card" style="width: 24rem; height: 20rem;">';
            echo '<div class="image-grid">
                <div class="image-item">
                    <img src="asset/kerja.png" alt="ruang-kerja">
                </div>
                <div class="image-item">
                    <img src="asset/makan.png" alt="ruang-makan">
                </div>
                <div class="image-item">
                    <img src="asset/tidur.png" alt="ruang-tidur">
                </div>
                <div class="image-item">
                    <img src="asset/tamu.png" alt="ruang-tamu">               
                </div>
                </div>';
            echo '</div>';


            // Lampu
            echo '<div class="card text-center" style="width: 24rem; height: 20rem;">';
            echo '<div>';
            echo '<h5><img src="asset/lamp.png" class="card-img-top" alt="lampu" width="1px">LIGHTS</h5>';
            echo '</div>';



            echo '<div class="card" style="width: 22rem; height: 12rem;">';

            // 1
            echo '<div class="row">';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Living Room</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['living_room'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Dining Room</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['dining_room'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            // 2
            echo '<div class="row">';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Kitchen Room</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['kitchen_room'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Garage Room</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['garage'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            // 3
            echo '<div class="row">';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Bed Room 1</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['bedroom_1'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Bed Room 2</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['bedroom_2'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            // 4
            echo '<div class="row">';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Bath Room 1</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['bathroom_1'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '<div class="col">';
            echo '<div class="form-check form-switch">';
            echo '<label class="form-check-label" for="flexSwitchCheckDefault">Bath Room 2</label>';
            echo '<input class="form-check-input" type="checkbox" ' . (($row['bathroom_2'] == 1) ? 'checked' : '') . '>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "Tidak ada data dalam tabel kontrol.";
    }
    ?>
</body>

</html>