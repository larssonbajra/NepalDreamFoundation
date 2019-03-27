<?php
$login_email = $_POST['login_email']; // required
$login_password = $_POST['login_password']; // required
require ('connect.php');

    $sql="select email,password from member_table";
$result=mysqli_query($conn,$sql);
$i=0;
    while ($row=mysqli_fetch_row($result))
    {
        if (($row[0] == $login_email) && ($row[1] == MD5($login_password)))
        {
            $i++;
        }
    }
    if($i>0)
    {
        ?>
        <script type="text/javascript" href="file.js">
            alert(" SIGN IN SUCCESSFUL");
            location.href = 'index.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript" href="file.js">


            alert("<?php echo "Username or Password Entry is wrong. Try Again";?>");

            location.href = 'signin.php';

        </script>
        <?php
    }
mysqli_close($conn);
?>
