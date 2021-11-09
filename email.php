<?php

//Send email to user
$to = "jorgehdz22447@gmail.com";
$subject = "Mensaje de contacto";
$message = "
<html>
<head>
<title>Mensaje de contacto</title>
</head>
<body>
<p>Hola, te escribio el siguiente mensaje:</p>
<p>Desde la pagina de contacto de la tortilleria zapata</p>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$_POST[email]>" . "\r\n";
mail($to,$subject,$message,$headers);

?>