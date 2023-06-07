<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $paragrafo = $_GET["paragrafo"];
    $parolaDaCensurara = $_GET['parolaDaCensurara'];
?>

<main>
<h1>Paragrafo senza Censura</h1>
    <p><?php echo $paragrafo ?></p>

<h2>Parola da Censurare</h2>
    <p>La parola da censurare è: <strong><?php echo $parolaDaCensurara ?></strong></p>

<h1>Paragrafo con Censura</h1>
    <p><?php echo str_replace($parolaDaCensurara, '***', $paragrafo)  ?></p>
    
</main>
</body>
</html>