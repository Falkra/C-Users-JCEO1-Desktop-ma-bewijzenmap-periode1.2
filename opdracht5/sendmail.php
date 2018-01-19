
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
$to = "24754@ma-web.nl";
$subject = $_POST['onderwerp'];
$message = $_POST['bericht'];
$headers = 'From: ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd';

echo $subject. '<br>' . $message;
?>

</body>
</html>


