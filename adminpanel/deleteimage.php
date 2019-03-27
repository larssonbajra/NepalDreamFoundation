<?php


session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}
$gid=$_GET['gid'];
$id = $_GET['id'];



require ("../connect.php");

$sql = "DELETE FROM image WHERE id=$id";

$conn->query($sql);

?>
    <script type="text/javascript" href="file.js">
        alert(" image deletion SUCCESSFUL");
        location.href = 'adminphotos.php?id='+<?php echo $gid;?>;
    </script>
<?php
$conn->close();

?>