<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['First Name'];
    $lname = $_POST['Last Name'];
    $mailFrom = $_POST['E-mail'];
    $country = $_POST['Country'];
    $message = $_POST['Message'];

    $mailTo = "admin@moyacentre.co.za";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;



    mail($mailTo, $txt, $headers);
    header("Location: contact.html?mailsend");
} 