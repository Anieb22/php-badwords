<?php 
$email = $_POST['email'];
$password = $_POST['password'];

$newPassword= str_replace($password,'***', $password);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Intro</title>
</head>
<body>
    <h1>
        Controlla i dati inseriti
    </h1>
    <p>
        email-- <?php echo $email ?>
    </p>
    <p>
        pass-- <?php echo $newPassword ?>
    </p>
    
</body>
</html>