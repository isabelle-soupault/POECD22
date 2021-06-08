<?php
function fonctionWithString (string $i = 'texte aléatoire'){
   return $i;
}

fonctionWithString('poupoupidou');

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 2</title>
</head>
<body>
<div class="container">
    <h1>Exercice 4</h1>

    <p text-center> Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>

</div>
<div class="container text-center mt-4">


<p> Le retour de la fonction est donc : <?= $text ?></p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--


ici comme $i a une valeur, on peut dire que cette variable est optionnelle car on n'a pas besoin de s'en servir.
ici la suite n'était pas nécessaire, on pouvait simplifier avec un var_dump.
Comme on peut ajouter des chiffre dedans, on va signaler qu'on veut des caractères et on veut que ce soit strict. Pour cela on va :

declare(strict_types = 1); Cela va indiquer qu'on veut un respect strict du typage de la fonction. Cela ne fonctionne que pour la fonction qui suit.

Ainsi, si on met des chiffres dans le string on va avoir l'affichage des exceptions.

Le respect du typage donne une couche de sécurité.

Cette fonction existe depuis php 7
On peut typer des classes, des attributs, des paramêtres, mais on ne peut pas TOUT typer.

->