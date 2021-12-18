<?php

require_once "config.php";

$connection=mysqli_connect(
$config['db']['server'],
$config['db']['username'],
$config['db']['password'],
$config['db']['name']
);

if($connection==false)
{
    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}

$email= $_POST['email'];
$phone=$_POST['phone'];
$fio=$_POST['fio'];
$kol=$_POST['kol'];

$insert_sql = "INSERT INTO `record`(`e-mail`, `phone`, `fio`, `kol`) VALUES ('$email','$phone','$fio','$kol')";
$result = mysqli_query($connection, $insert_sql);
?>