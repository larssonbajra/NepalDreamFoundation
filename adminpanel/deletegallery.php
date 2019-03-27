<?php


session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}

$id = $_GET['id'];



require ("../connect.php");

$sql = "DELETE FROM image WHERE gallery_id=$id";
$sql2="DELETE FROM gallery WHERE id=$id";
 $conn->query($sql);
$conn->query($sql2);
?>
    <script type="text/javascript" href="file.js">
        alert(" gallery deletion SUCCESSFUL");
        location.href = 'admingallery.php';
    </script>
<?php
$conn->close();

?>