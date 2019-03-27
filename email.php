


<?php


if(isset($_POST['submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "larssonbajra@gmail.com";
    $email_subject = "Request from website";

    function died($error)
    {
        // your error code can go here
        ?>
        <script type="text/javascript" href="file.js">
            alert("We are very sorry, but there were error(s) found with the form you submitted. <?php echo $error;?>");

    location.href = 'contact.php';</script>
        <?php
    }
    $name = $_POST['name']; // required

    $email = $_POST['email']; // required

    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
        $bad = array("bcc:","to:","cc:");
        return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Comments: ".clean_string($message)."\n";

// create email headers
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!-- include your own success html here -->

    <script type="text/javascript" href="file.js">


        alert(" Thank you for contacting us. We will be in touch with you very soon.");

        location.href = 'contact.php';

    </script>



    <?php

}
?>