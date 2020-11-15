<html>
<head>
      <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
      <link rel="stylesheet" href="stylesheets/htmlq.css">
</head>

<body>
<div class="container">
<p><center>Vielen Dank! Ihre E-Mail-Adresse wurde gespeichert.<br><br>
Sie können das Fenster jetzt schließen.</center></p>
</div>
<body>

<?php
$to_email = 'eero@kuusisto.de';
$subject = 'Verlosung';
$message = $_POST["email"];
$headers = 'From: eero@kuusisto.de';
mail($to_email,$subject,$message,$headers);
?>

</html>
