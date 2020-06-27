<!DOCTYPE html>
<html lang="hr">
<head>
    <title>Moj Pas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <form method="post">
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