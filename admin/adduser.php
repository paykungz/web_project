<?php
require('config.inc.php');
$user = 'admin';
$email = 'admin@web.com';
$raw_psw = '1234';
$password = hash('sha512',$raw_psw);

$conn = new mysqli($dbserver, $dbuser, $dbpass,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
$mysql = "INSERT INTO member(name,email,passworld,admin) VALUES('$user','$email','$password',1)";
mysqli_query($conn,$mysql);

?>