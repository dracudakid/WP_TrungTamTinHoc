<?php
session_start();
include('connection.php'); // kết nối database
$name=addslashes($_POST['name']);
$sex=addslashes($_POST['sex']);
$birthday=addslashes($_POST['nam'].'-'.$_POST['thang'].'-'.$_POST['ngay']);
$email=addslashes($_POST['email']);
$phone=addslashes($_POST['phone']);
$course=addslashes($_POST['course']);
$time=addslashes($_POST['time']);
$day=addslashes($_POST['day']);
mysql_query("INSERT INTO db_dangkykhoahoc(name, sex, birthday, email, phone, course, time, day)VALUES('$name', '$sex', '$birthday', '$email', '$phone', '$course', '$time', '$day')");
header("location: dangkykhoahoc.php?remarks=success");
mysql_close($con);
?>