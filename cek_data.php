<?php
include 'koneksi.php';
$query = "SELECT * FROM tb_suhu2;";
$sql = mysqli_query($conn, $query);
$no = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="img/png" href="asset/weather-logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/js/pluggins.js"></script>
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
    <title>Smart Home</title>

</head>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a id="timer" class="navbar-brand" href="menu_utama.php">
            Cek Rentang Data
        </a>
    </div>
</nav>
<div class="container-fluid">
    <a href="menu_utama.php" type="button" class="btn btn-outline-dark mt-2">
        <i class="fa fa-back"></i>
        Kembali</a>
</div>

<body>
    <script>
        $(document).ready(function() {
            $('#dt').DataTable();
        })
    </script>

    <script>
        $(document).ready(function() {
            $.datepicker.setDefaults({
                dateFormat: 'Y-m-d H:i'
            });
            $(function() {
                $("#from_date").datepicker();
                $("#to_date").datepicker();
            });
        });
    </script>
    <div>

        <form action="" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>From Date</label>
                        <input type="date" name="from_date" value="
                        <?php if (isset($_GET['from_date'])) {
                            echo $_GET['from_date'];
                        } ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>To Date</label>
                        <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                        echo $_GET['to_date'];
                                                                    } ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Click to Filter</label> <br>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
        </form>

        <div>
            <table id="dt" class="table align-middle cell-border hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Time</th>
                        <th>Temperature</th>
                        <th>Humidity</th>
                        <th>Ac</th>
                        <th>Electric</th>
                        <th>Water</th>
                        <th>Wifi</th>
                        <th>Alarm</th>
                        <th>Living_room</th>
                        <th>Dining_room</th>
                        <th>Kitchen_room</th>
                        <th>Bathroom_1</th>
                        <th>Bathroom_2</th>
                        <th>Bedroom_1</th>
                        <th>Bedroom_2</th>
                        <th>Garage</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $con = mysqli_connect("localhost", "root", "admin", "db_suhu");

                    if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                        $from_date = $_GET['from_date'];
                        $to_date = $_GET['to_date'];

                        $query = "SELECT * FROM tb_suhu2 WHERE time BETWEEN '$from_date' AND '$to_date' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                    ?>
                                <tr>
                                    <td><?= $row['id_suhu1']; ?></td>
                                    <td><?= $row['time']; ?></td>
                                    <td><?= $row['temperature']; ?></td>
                                    <td><?= $row['humidity']; ?></td>
                                    <td><?= $row['ac']; ?></td>
                                    <td><?= $row['electric']; ?></td>
                                    <td><?= $row['water']; ?></td>
                                    <td><?= $row['wifi']; ?></td>
                                    <td><?= $row['alarm']; ?></td>
                                    <td><?= $row['living_room']; ?></td>
                                    <td><?= $row['dining_room']; ?></td>
                                    <td><?= $row['kitchen_room']; ?></td>
                                    <td><?= $row['bathroom_1']; ?></td>
                                    <td><?= $row['bathroom_2']; ?></td>
                                    <td><?= $row['bedroom_1']; ?></td>
                                    <td><?= $row['bedroom_2']; ?></td>
                                    <td><?= $row['garage']; ?></td>
                                </tr>
                    <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>