<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <form method="post" action="sendemail.php">
        <label>Name:</label>
        <input id="sender" name="sender">

        <label>Email address:</label>
        <input id="email" name="senderEmail">

        <label>Message:</label>
        <textarea id="message" rows="5" cols="20" name="message"></textarea>

        <button type="button" class="btn btn-primary btn-lg" id="submitbtn" name="submit" onclick=send()>Prijava</button>    </form>
    <script src="sendemail.js" type="text/javascript"></script>

</body>

</html>