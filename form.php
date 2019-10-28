<?php
    if (!isset($_POST['submit']))
    {
        echo "error, need to submit form"
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name)|| empty($email) || empty($message)){
      echo "Name and Email are required. Message cannot be empty."
      exit
    }

    $from = 'From: jkam17@gmail.com';
    $to = 'jkam17@gmail.com';
    $body = "Name: $name\nE-mail: $email\nSubject: $subject\n\nThe message is below:\n$message";
    $headers = "From: $from \r\n";

    if (isset($_POST['submit']))
    {
        if (mail($to, $subject, $body, $headers))
        {
            echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
        }
        else
        {
        echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
        }
    }
    header('Location: index.html')
?>
