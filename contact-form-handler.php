<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$title = $_POST['title'];
$messsage = $_POST['message']


$email_from = 'esambooks@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name. \n".
                "User Email: $visitor_email. \n".
                "Title: $title. \n".
                "User Message: $messsage. \n";

        $to = 'samexchi@gmail.com';

        $headers = "From: $email_from \r\n";

        $headers .= "Reply-To: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location : index.html");


?>