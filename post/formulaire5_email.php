<?php

if($_POST)
{
    foreach($_POST as $indice => $valeur)
    {
        echo "$indice" . $valeur  . "<br>";
    }


$expediteur = $_POST['expediteur'];
$destinataire = $_POST['destinataire'];
$message = $_POST['message'];
$sujet = $_POST['sujet'];


$expe = "From: " . $expediteur;

mail($destinataire, $message, $sujet, $expe);

$message = "ton message est envoyé";

}

?>



<!-- réalisez un formulaire avec 4 champs : Destinaire , expediteur, sujet, message-->
<form action="" method="post">

<label for="destinataire"> Destinataire :</label><br>
<input type="text" name="destinataire" placeholder="Destinataire"><br>
<label for="expediteur">Expediteur :</label><br>
<input type="text" name="expediteur" placeholder="Expediteur"><br>
<label for="subjet">Sujet :</label><br>
<input type="text" name="sujet" placeholder="Sujet"><br>
<label for="text">Message :</label><br>
<textarea name="message" id="" cols="30" rows="5"></textarea>
<input type="submit" name="envoi" value="Envoyer">


</form>
