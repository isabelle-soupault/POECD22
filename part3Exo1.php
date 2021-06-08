<?php
$var_a = 0;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 3 - Exercice 1</title>
</head>
<body>
<div class="container">
    <h1>Exercice 1</h1>

    <p text-center> Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer</p>

</div>
<div class="container text-center mt-4">
    <?php
        for ($var_a =1; $var_a <=10; $var_a ++){
            ?> <p><?= $var_a ?></p><?php ;
        }

        while ($var_a < 10) {
            echo $var_a++;
            
        }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Si on respecte l'ennoncé, le tant que se traduit par une boucle while.
la différence entre $a++ et ++$a
$a++ va afficher puis va incrémenter
++$a va incrémenter puis afficher

->