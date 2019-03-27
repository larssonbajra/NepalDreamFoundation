<?php


$id = $_GET['id'];



require ("connect.php");

$sql = "SELECT gallery_image FROM gallery WHERE id=$id";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$conn->close();

header("Content-type: image/jpeg");
echo $row['gallery_image'];
?>