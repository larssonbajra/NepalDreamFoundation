<?php


session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}

$id = $_GET['id'];



require ("../connect.php");

$sql = "SELECT image FROM image WHERE id=$id";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$conn->close();

header("Content-type: image/jpeg");
echo $row['image'];
?>