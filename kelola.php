<?php
include 'koneksi.php';
include 'proses.php';


if (isset($_GET['ubah'])) {
    $id_suhu1 = $_GET['ubah'];

    $query = "SELECT * FROM kontrol WHERE id_suhu1 = '$id_suhu1';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $temperature    = $result['temperature'];
    $humidity       = $result['humidity'];
    $ac             = $result['ac'];
    $electric       = $result['electric'];
    $water          = $result['water'];
    $wifi           = $result['wifi'];
    $alarm          = $result['alarm'];
    $living_room    = $result['living_room'];
    $dining_room    = $result['dining_room'];
    $kitchen_room   = $result['kitchen_room'];
    $bathroom_1     = $result['bathroom_1'];
    $bathroom_2     = $result['bathroom_2'];
    $bedroom_1      = $result['bedroom_1'];
    $bedroom_2      = $result['bedroom_2'];
    $garage         = $result['garage'];
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>CRUD</title>
</head>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">
            CRUD
            <div id="timer">Countdown: <span id="countdown">5 detik</span></div>
        </a> -->
        <!-- <a id="timer" class="navbar-brand" href="#">
            CRUD | Countdown: <span id="countdown">5 detik</span>
        </a> -->
        <a href="index.php" type="button" class="btn btn-danger">
            <i class="fa fa-reply"></i> Home
        </a>
    </div>
</nav>

<body>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id_suhu1; ?>" name="id_suhu1">

            <div class="mb-3 row">
                <label for="temperature" class="col-sm-2 col-form-label">Temperature</label>
                <div class="col-sm-10">
                    <input required type="text" name="temperature" class="form-control" id="temperature" value="<?php echo $temperature; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="humidity" class="col-sm-2 col-form-label">Humidity</label>
                <div class="col-sm-10">
                    <input required type="text" name="humidity" class="form-control" id="humidity" value="<?php echo $humidity; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ac" class="col-sm-2 col-form-label">Air Conditioner</label>
                <div class="col-sm-10">
                    <input required type="text" name="ac" class="form-control" id="ac" value="<?php echo $ac; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="electric" class="col-sm-2 col-form-label">Electricity</label>
                <div class="col-sm-10">
                    <input required type="text" name="electric" class="form-control" id="electric" value="<?php echo $electric; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="water" class="col-sm-2 col-form-label">Water</label>
                <div class="col-sm-10">
                    <input required type="text" name="water" class="form-control" id="water" value="<?php echo $water; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="wifi" class="col-sm-2 col-form-label">Wifi</label>
                <div class="col-sm-10">
                    <input required type="text" name="wifi" class="form-control" id="wifi" value="<?php echo $wifi; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alarm" class="col-sm-2 col-form-label">Alarm</label>
                <div class="col-sm-10">
                    <input required type="text" name="alarm" class="form-control" id="alarm" value="<?php echo $alarm; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="living_room" class="col-sm-2 col-form-label">Living Room</label>
                <div class="col-sm-10">
                    <input required type="text" name="living_room" class="form-control" id="living_room" value="<?php echo $living_room; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dining_room" class="col-sm-2 col-form-label">Dining Room</label>
                <div class="col-sm-10">
                    <input required type="text" name="dining_room" class="form-control" id="dining_room" value="<?php echo $dining_room; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kitchen_room" class="col-sm-2 col-form-label">Kitchen Room</label>
                <div class="col-sm-10">
                    <input required type="text" name="kitchen_room" class="form-control" id="kitchen_room" value="<?php echo $kitchen_room; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bathroom_1" class="col-sm-2 col-form-label">Bathroom 1</label>
                <div class="col-sm-10">
                    <input required type="text" name="bathroom_1" class="form-control" id="bathroom_1" value="<?php echo $bathroom_1; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bathroom_2" class="col-sm-2 col-form-label">Bathroom 2</label>
                <div class="col-sm-10">
                    <input required type="text" name="bathroom_2" class="form-control" id="bathroom_2" value="<?php echo $bathroom_2; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bedroom_1" class="col-sm-2 col-form-label">Bedroom 1</label>
                <div class="col-sm-10">
                    <input required type="text" name="bedroom_1" class="form-control" id="bedroom_1" value="<?php echo $bedroom_1; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bedroom_2" class="col-sm-2 col-form-label">Bedroom 2</label>
                <div class="col-sm-10">
                    <input required type="text" name="bedroom_2" class="form-control" id="bedroom_2" value="<?php echo $bedroom_2; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="garage" class="col-sm-2 col-form-label">Garage</label>
                <div class="col-sm-10">
                    <input required type="text" name="garage" class="form-control" id="garage" value="<?php echo $garage; ?>">
                </div>
            </div>

            <!-- Tombol Ubah dan Simpan -->
            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                    if (isset($_GET['ubah'])) {
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-disk"></i> Simpan Perubahan
                        </button>
                    <?php
                    } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-disk"></i> Tambahkan
                        </button>
                    <?php }
                    ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply"></i> Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
    <!-- <script>
        var countdownTime = 5;

        function startCountdown() {
            var countdown = setInterval(function() {
                countdownTime--;
                document.getElementById("countdown").innerHTML = countdownTime + " detik";

                if (countdownTime === 0) {
                    clearInterval(countdown);
                    sendDataToServer();

                    setTimeout(function() {
                        header("location: index.php");
                    }, 1000);
                }
            }, 1000);
        }

        function sendDataToServer() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "proses.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send();
        }

        startCountdown();
    </script> -->
</body>

</html>