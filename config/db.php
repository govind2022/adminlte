<?php
$conn = new mysqli('localhost', 'root', '', 'matrimony', 3306);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno($conn) . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error($conn) . PHP_EOL;
    exit;
}
//@session_start();
 ?>
