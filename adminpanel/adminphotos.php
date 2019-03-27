<?php


session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}

$id = $_GET['id'];
require ('../connect.php');





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
                Welcome <a href="#"><strong>Administrator</strong></a>
                <span>|</span>
                <a href="adminlogout.php">Log out</a>
            </div>
        </div>
        <!-- End Logo + Top Nav -->

        <!-- Main Nav -->
        <div id="navigation">
            <ul>

                <li><a href="adminpanel.php"><span>User Management</span></a></li>
                <li><a class="active" href="admingallery.php"><span>Photo Gallery</span></a></li>
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
                        <h2 class="left">list of images</h2>

                    </div>
                    <!-- End Box Head -->

                    <!-- Table -->
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>

                                <th>Image Name</th>
                                <th>Image Description</th>
                                <th>Image</th>
                                <th width="110" class="ac">Content Control</th>
                            </tr>
                            <?php

                            $sql="select id,image_name,description,image from image where gallery_id=$id ";

                            $result=mysqli_query($conn,$sql);

                            while ($row=mysqli_fetch_row($result))
                            {
                                ?>
                                <tr class="odd">

                                    <td> <?php echo $row[1];?></td>
                                    <td><?php echo $row[2];?></td>
                                    <td> <img src="getImage.php?id=<?php echo $row[0];?>" alt="Text alternative when image is not available" width="175" height="200" /></td>

                                    <td><a href="deleteimage.php?id=<?php echo $row[0];?>&gid=<?php echo $id;?>" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
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
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Add New Picture</h2>
                    </div>
                    <!-- End Box Head -->
                    <form action="adminimageinput.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">

                        <!-- Form -->
                        <div class="form">
                            <p>
                                <span class="req">max 20 text</span>
                                <label>Image Title <span>(Required Field)</span></label>
                                <input type="text" name="image_name" class="field size1" />
                            </p>


                            <p>
                                <span class="req">max 100 text</span>
                                <label>Description <span>(Required Field)</span></label>
                                <textarea class="field size1" name="description" rows="10" cols="30"></textarea>
                            </p>

                        </div>
                        <!-- End Form -->

                        <!-- Form Buttons -->
                        <div class="buttons">
                            <p>750*500 recommended</p>
                            <input type="file" name="image"><input type="submit" name="submit" value="upload"/>
                        </div>
                        <!-- End Form Buttons -->
                    </form>



                </div>
                <!-- End Box -->

            </div>
            <!-- End Content -->

            <!-- Sidebar -->

            <!-- End Sidebar -->

            <div class="cl">&nbsp;</div>
        </div>
        <!-- Main -->
    </div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
    <div class="shell">
        <span class="left">&copy; 2010 - CompanyName</span>
        <span class="right">

		</span>
    </div>
</div>
<!-- End Footer -->

</body>
</html>