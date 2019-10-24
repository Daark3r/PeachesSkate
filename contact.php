<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $mailTo = "admin@moyacentre.co.za";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$fname.$lname.$country.".\n\n".$message;



    mail($mailTo, $txt, $headers);
    header("Location: contact.html?mailsend");
} 