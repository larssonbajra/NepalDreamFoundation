<?php
session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}

$id = $_GET['id'];



require ("../connect.php");

$sql = "DELETE FROM member_table WHERE id=$id";

$conn->query($sql);

?>
    <script type="text/javascript" href="file.js">
        alert(" member deletion SUCCESSFUL");
        location.href = 'adminpanel.php';
    </script>
<?php
$conn->close();

?>