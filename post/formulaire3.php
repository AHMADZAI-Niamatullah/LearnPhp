<?php

//echo '<h1>'. "Formulaire 3" . '</h1>';
/*  
Exercice : Réalisez un formulaire avec les champs pseudo et email en affichant les
information directement la page formulaire 4.
*/
?>

<h2>Exercice Formulaire 3</h2>

<!-- <form action="formulaire4.php" method="POST" id="formName">
<label for="text">Prénom :</label>
<input type="pseudo" name="pseudo1">
<br>
<label for="text">Nom :</label>
<input type="pseudo" name="pseudo2">
<br>
<label for="email">Email</label>
<input type="email" name="email">
<br>
<input type="submit" name="envoie">

</form> -->


<!-- <form action="formulaire4.php" method="POST" id="formName">
<label for="text">Pseudo :</label>
<input type="pseudo" name="pseudo" require>
<br>
<label for="email">Email</label>
<input type="email" name="email" require>
<br>
<input type="submit" name="envoie"> -->


<form action="formulaire4.php" method="POST" name="formName">
<label for="text">Pseudo :</label>
<input type="pseudo" name="pseudo" placeholder="Pseudo">


<br>

<label for="email">Email</label>
<input type="email" name="email" placeholder="Email">


<br>

<input type="submit" name="envoie">

</form>