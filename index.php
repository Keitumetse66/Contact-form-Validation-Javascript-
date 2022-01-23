<?php 
include_once 'contact.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" class="form">
        <h1>contact form</h1>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" placeholder="username"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="email"><br>
        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" id="subject" placeholder="subject"><br>
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea><br>
        <button type="submit" class="submit">Submit</button>
    </form>


    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="app.js"></script>
</body>
</html>