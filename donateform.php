<?php

 $first_name= $_POST['fname']; // required
$last_name= $_POST['lname']; // required
$email = $_POST['email'];
$phone = $_POST['phone'];




    require ("connect.php");
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    ?>


    <script type="text/javascript" href="file.js">


        alert("Email invalid");

        location.href = 'index.php';

    </script>
    <?php

}

    $mysql_qry="insert into donate_table(first_name,last_name,email,phone) values ('$first_name','$last_name','$email','$phone');";
    If($conn->query($mysql_qry)===TRUE)
    {





        ?>


        <script type="text/javascript" href="file.js">


            alert(" entry SUCCESSFUL");

            location.href = 'index.php';

        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript" href="file.js">


            alert("<?php echo "ERROR: " . $mysql_qry . "<br>" . $conn->error?>");

            location.href = 'index.php';

        </script>
        <?php





}
?>


