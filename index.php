<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <form method="post" action="sendemail.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>