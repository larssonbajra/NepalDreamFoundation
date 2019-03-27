<?php
session_start();
if (!$_SESSION["login_user"])
{
    header("location:../admin.php");
}
require ("../connect.php");
if(isset($_POST['submit'])) {
    $gallery_name = $_POST['gallery_name'];
    $gallery_desc = $_POST['gallery_desc'];


    $gallery_image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
     $imageType=mysqli_real_escape_string($conn,$_FILES["image"]["type"]);

     if(substr($imageType,0,5)=="image")
      {
    $mysql_qry = "insert into gallery(gallery_name,gallery_desc,gallery_image) values ('$gallery_name','$gallery_desc','$gallery_image');";
          if ($conn->query($mysql_qry))
          {
              ?>


              <script type="text/javascript" href="file.js" >


                  alert("Gallery Input SUCCESSFUL");

                  location.href = 'admingallery.php';

              </script>
              <?php


              $conn->close();

          }
          else
          {

              ?>


              <script type="text/javascript" href="file.js" >


                  alert("Gallery Input NOT SUCCESSFUL");

                  location.href = 'admingallery.php';

              </script>
              <?php
          }


      }
      else
      {
          ?>


          <script type="text/javascript" href="file.js">


              alert("Please Choose Image File");

              location.href = 'admingallery.php';

          </script>
          <?php
      }

    //
}
?>