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
    <link rel="icon" type="img/png" href="asset/home.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- DATA TABLES -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/js/pluggins.js"></script>
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

    <title>Smart Home</title>

</head>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a id="timer" class="navbar-brand" href="menu_utama.php">
            Berisi data yang telah disimpan
        </a>

    </div>
</nav>

<body>

    <div>
        <a href="dashboard.php" type="button" class="btn btn-dark mt-2">
            <i class="fa fa-home"></i>
            Smart Home</a>
        <a href="tambah_data.php" type="button" class="btn btn-success mt-2">
            <i class="fa fa-plus"></i>
            Tambah Data</a>
        <a href="cek_data.php" type="button" class="btn btn-secondary mt-2">
            <i class="fa fa-search"></i>
            Cek Rentang Data</a>
    </div>
    <!-- <form action="process.php" method="post">
            <label for="datetimePicker">Select Date and Time:</label>
            <input type="text" id="datetimePicker" name="datetimePicker" required>
            <button type="submit">Submit</button>
        </form>

        <script>
            flatpickr("#datetimePicker", {
                mode: "range",
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
        </script> -->

    <div>
        <table id="dt" class="table align-middle cell-border hover">
            <thead>
                <tr>
                    <th>
                        <center>No</center>
                    </th>
                    <th>Tanggal</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Air Conditioner</th>
                    <th>Electricity</th>
                    <th>Water</th>
                    <th>Wifi</th>
                    <th>Alarm</th>
                    <th>Living Room</th>
                    <th>Dining Room</th>
                    <th>Kitchen Room</th>
                    <th>Bathroom 1</th>
                    <th>Bathroom 2</th>
                    <th>Bedroom 1</th>
                    <th>Bedroom 2</th>
                    <th>Garage</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td>
                            <center>
                                <?php echo ++$no; ?>.
                            </center>
                        </td>
                        <td><?php echo $result['time']; ?></td>
                        <td><?php echo $result['temperature']; ?></td>
                        <td><?php echo $result['humidity']; ?></td>
                        <td><?php echo $result['ac']; ?></td>
                        <td><?php echo $result['electric']; ?></td>
                        <td><?php echo $result['water']; ?></td>
                        <td><?php echo $result['wifi']; ?></td>
                        <td><?php echo $result['alarm']; ?></td>
                        <td><?php echo $result['living_room']; ?></td>
                        <td><?php echo $result['dining_room']; ?></td>
                        <td><?php echo $result['kitchen_room']; ?></td>
                        <td><?php echo $result['bathroom_1']; ?></td>
                        <td><?php echo $result['bathroom_2']; ?></td>
                        <td><?php echo $result['bedroom_1']; ?></td>
                        <td><?php echo $result['bedroom_2']; ?></td>
                        <td><?php echo $result['garage']; ?></td>

                        <td>
                            <a href=" kelola.php?ubah=<?php echo $result['id_suhu1']; ?>" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="proses.php?hapus=<?php echo $result['id_suhu1']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Yakin?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                } ?>
    </div>
    <script>
        $(document).ready(function() {
            $('#dt').DataTable();
        })
    </script>
</body>

</html>