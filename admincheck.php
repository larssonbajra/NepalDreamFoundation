<?php
session_start();
$admin_name = $_POST['admin_name']; // required
$password = $_POST['password']; // required
require ('connect.php');

$sql="select admin_name,password from admin";
$result=mysqli_query($conn,$sql);
$i=0;
while ($row=mysqli_fetch_row($result))
{
    if (($row[0] == $admin_name) && ($row[1] == MD5($password)))
    {
        $_SESSION["login_user"]=$admin_name;
       header("location:adminpanel/adminpanel.php");
    }
}
if($i>0)
{

   session_start();
$newsessid = session_regenerate_id();
session_id($newsessid);
?>
    <script type="text/javascript" href="file.js">
        location.href = 'adminpanel/adminpanel.php';
        </script>
    <?php


}
else
{
    ?>
    <script type="text/javascript" href="file.js">


        alert("<?php echo "Admin Name or Password Entry is wrong. Try Again";?>");

        location.href = 'admin.php';

    </script>
    <?php
}
mysqli_close($conn);
?>
