<?php

require_once 'connection.php';

$nameDB = $_POST['name'];
$surnameDB = $_POST['surname'];
$aliveDB = $_POST['alive'];

mysqli_query($link, query:"INSERT INTO `hehe` (`id`, `name`, `surname`, `alive`) VALUES (NULL, '$nameDB', '$surnameDB', '$aliveDB')");

header("Location: index.php");

?>