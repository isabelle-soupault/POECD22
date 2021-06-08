<?php
$i = rand(0 , 30);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 3 - Exercice 9</title>
</head>
<body>
<div class="container">
    <h1>Exercice 9</h1>

    <p text-center> Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.
En allant de 1 à 100 avec un pas de 1, afficher les nombres jusqu'au nombre aléatoire, puis sortir de la boucle.

</p>

</div>
<div class="container text-center mt-4">

<p> Nombre choisi aléatoirement : <?= $i ?></p>

<?php for ($a = 1; $a <= 100 ; $a++) : ?>
    <?php if ($a <= $i): ?>
        <p> <?= $a ?></p>
        <?php else : break ; ?>
    <?php endif ?>  
<?php endfor ?>

 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
