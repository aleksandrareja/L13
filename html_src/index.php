<?php
echo "<h1>Laboratorium nr 13</h1>";
echo "<p>Aleksandra Reja</p>";

$host = 'mysql';
$user = 'lemp_user';
$pass = 'lemp_password';
$db   = 'lemp_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Połączenie z MySQL nieudane: " . $conn->connect_error);
}
echo "Połączenie z bazą danych MySQL zrealizowane pomyślnie!";
?>