<?php 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = 'localhost';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя 
$pass = 'mysql'; // Установленный вами пароль пользователю (в колледже пароля нет, поэтому ставим '')
$db_name = 'u2701345_molcentr';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);

$mysqli->set_charset('utf8mb4');
