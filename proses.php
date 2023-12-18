<?php
include 'koneksi.php';

$id_suhu1           = '';
$temperature    = rand(18, 30);
$humidity       = rand(0, 100);
$ac             = rand(0, 1);
$electric       = rand(0, 1000);
$water          = rand(0, 1000);
$wifi           = rand(0, 1);
$alarm          = rand(0, 1);
$living_room    = rand(0, 1);
$dining_room    = rand(0, 1);
$kitchen_room   = rand(0, 1);
$bathroom_1     = rand(0, 1);
$bathroom_2     = rand(0, 1);
$bedroom_1      = rand(0, 1);
$bedroom_2      = rand(0, 1);
$garage         = rand(0, 1);


$sql = "INSERT INTO tb_suhu2 (
    temperature, humidity, ac, electric, water, wifi, alarm,
    living_room, dining_room, kitchen_room, bathroom_1, bathroom_2, bedroom_1, bedroom_2, garage
) VALUES (
    $temperature, $humidity, $ac, $electric, $water, $wifi, $alarm,
    $living_room, $dining_room, $kitchen_room, $bathroom_1, $bathroom_2, $bedroom_1, $bedroom_2, $garage
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
