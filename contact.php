<?php
$email = $_POST['email'];
$FIO = $_POST['FIO'];
$passports = $_POST['passports'];
$passportn = $_POST['passportn'];
$pswd = $_POST['pswd'];

$servername = "localhost";
$username = "root";
$password = "privetik123AAA!";
$dbname = "sinergia";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}
echo "success";
$sql = "INSERT INTO users (email,FIO,passports,passportn,pswd) VALUES ('$email','$FIO','$passports','$passportn','$pswd')";
if ($conn->query($sql)===TRUE){
echo "suc";
}else{echo "error" . $sql . "<br>" . $conn->error;}
$conn->close();
?>
