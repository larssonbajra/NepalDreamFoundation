<?php
session_start();
if (isset($_SESSION["login_user"]))
{
    header("location:adminpanel/adminpanel.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <link href="assets/css/admin.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>
<body>
<!-----start-main---->
<div class="main">
    <div class="login-form">
        <h1>Admin Login</h1>
        <div class="head">
            <img src="assets/img/admin.png" alt=""/>
        </div>
        <form action="admincheck.php" method="post">
            <input type="text" class="text" value="enter name" name="admin_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
            <input type="password" name="password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
            <div class="submit">
                <input type="submit" value="LOGIN" >
            </div>

        </form>
    </div>

</div>
<!-----//end-main---->

</body>
</html>


