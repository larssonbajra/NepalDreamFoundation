<?php
session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}
require ("../connect.php");

$id = $_GET['id'];
if(isset($_POST['submit']))
{
    $image_name=$_POST['image_name'];

    $description=$_POST['description'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $imageType=mysqli_real_escape_string($conn,$_FILES["image"]["type"]);

    if(substr($imageType,0,5)=="image")
    {

        $img_qry = "insert into image(gallery_id,image_name,description,image) values ('$id','$image_name','$description','$image');";
        if ($conn->query($img_qry))
        {
            ?>


            <script type="text/javascript" href="file.js" >


                alert("Image Input SUCCESSFUL");

                location.href = 'adminphotos.php?id='+ <?php echo $id;?> ;

            </script>
            <?php


            $conn->close();

        }
        else
            {
                ?>


                <script type="text/javascript" href="file.js" >


                    alert("Image Input NOT SUCCESSFUL");

                    location.href = 'adminphotos.php?id='+ <?php echo $id;?> ;

                </script>
                <?php

        }


    }
    else
    {
        ?>


        <script type="text/javascript" href="file.js">


            alert("Please Choose Image File");

            location.href = 'adminphotos.php?id='+ <?php echo $id;?> ;

        </script>
        <?php
    }



    //
}
?>