<?php

    $FirstName = $_POST['FirstName']; // required
    $FamilyName = $_POST['FamilyName'];
    $Email = $_POST['Email']; // required
    $ContactNo = $_POST['ContactNo']; //
    $Password = $_POST['Password']; // required
    $RePassword = $_POST['RePassword']; // required

If($Password!=$RePassword)
{
    ?>
    <script type="text/javascript" href="file.js">


        alert(" Password Mismatch");

        location.href = 'signup.php';

    </script>



<?php
}
else
{

    require ("connect.php");
    if($ContactNo=' ')
    {
        $ContactNo=(int)$ContactNo;
    }


    $mysql_qry="insert into member_table(first_name,family_name,email,contact,password) values ('$FirstName','$FamilyName','$Email','$ContactNo',MD5('$Password'));";
    If($conn->query($mysql_qry)===TRUE)
    {





        ?>


        <script type="text/javascript" href="file.js">


            alert(" SIGN UP SUCCESSFUL");

            location.href = 'index.php';

        </script>
        <?php
    }
    else
        {
        ?>
        <script type="text/javascript" href="file.js">


            alert("<?php echo "ERROR: " . $mysql_qry . "<br>" . $conn->error?>");

            location.href = 'signup.php';

        </script>
        <?php
    }




}
?>




