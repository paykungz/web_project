<?php
header("Content-Type: application/json; charset=UTF-8");

$id = $_GET['id'];
require("config.inc.php");

$conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname);
mysqli_query($conn,"SET NAMES utf8");
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
$stmt = $conn->prepare("SELECT * FROM member WHERE id = ?");
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>