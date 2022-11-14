<?php
$to = "giulianalauriacosas@gmail.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comments']; 


$comentarios = $_POST['comments'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>Nombre del usuario: $name </p> 
<p>Email: $email </p> 
<p>Comentarios: $comments </p> 
</body>
</html>";
 echo 'Thank you :)';
mail($to, $subject, $message, $headers);
?>

