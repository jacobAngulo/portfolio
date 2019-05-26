<?php

    $visitor_name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $visitor_message=$_POST['message'];

    $email_from="jacob1angulo@gmail.com";
    $email_subject="New Form Submission";
    $email_body="User Name: $visitor_name.\n";
                "User Email: $visitor_email.\n";
                "User Message: $visitor_message.\n";

    $to="jacob1angulo@gmail.com";
    $headers="From: $email_from\r\n";
    $headers.="Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers)

    header("Location index.html")

?>