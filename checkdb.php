<?php
$test = mysqli_connect('127.0.0.1', 'admin', 'root');
if (!$test) {
die('MySQL Error: ' . mysqli_error());
}
echo 'Database connection is working properly!';
mysqli_close($testConnection);