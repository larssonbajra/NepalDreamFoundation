<?php


session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>ADMINISTRATOR PANEL</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
    <div class="shell">
        <!-- Logo + Top Nav -->
        <div id="top">
            <h1><a >Welcome <?php echo $_SESSION["login_user"];?></a></h1>
            <div id="top-navigation">
                Welcome <a href="adminpanel.php"><strong>Administrator</strong></a>
                <span>|</span>
                <a href="adminlogout.php">Log out</a>
            </div>
        </div>
        <!-- End Logo + Top Nav -->

        <!-- Main Nav -->
        <div id="navigation">
            <ul>

                <li><a class="active"><span>User Management</span></a></li>
                <li><a href="admingallery.php"><span>Photo Gallery</span></a></li>
                <li><a href="donator.php"><span>Donor's list</span></a></li>
            </ul>
        </div>
        <!-- End Main Nav -->
    </div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
    <div class="shell">



        <!-- End Message Error -->
        <br />
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">

                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">Current members</h2>

                    </div>
                    <!-- End Box Head -->

                    <!-- Table -->
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>

                                <th>First Name</th>
                                <th>Family Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th width="110" class="ac">Content Control</th>
                            </tr>
                            <?php
                            require ('../connect.php');

                            $sql="select first_name,family_name,email,contact,id from member_table";

                            $result=mysqli_query($conn,$sql);

                            while ($row=mysqli_fetch_row($result))
                            {
                                ?>
                                <tr class="odd">

                                <td><h3><?php echo $row[0];?></h3></td>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
                                    <td><?php echo $row[3];?></td>
                                <td><a href="deletemember.php?id=<?php echo $row[4];?>" class="ico del">Delete</a></td>
                            </tr>
                            <?php
                            }



                            ?>

                        </table>


                        <!-- Pagging -->

                        <!-- End Pagging -->

                    </div>
                    <!-- Table -->

                </div>
                <!-- End Box -->

                <!-- Box -->


            <!-- Sidebar -->

            <!-- End Sidebar -->


        <!-- Main -->
    </div>
</div>
<!-- End Container -->

<!-- Footer -->

<!-- End Footer -->

</body>
</html>