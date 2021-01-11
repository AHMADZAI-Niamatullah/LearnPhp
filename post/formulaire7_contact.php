<?php

/*
Exercice : Réalisez un formulaire de contacte pour votre site 
1- Vous devez être l'unique destinataire du message
2- Ajoutez les champs société, non, prénom, email, sujet et message

*/

if($_POST)
{
    echo $_POST['sujet'];
    echo $_POST['message'];
    echo $_POST['expediteur'];
    


$email = "From: $_POST[expediteur] \n";
$email .= "MIME-Version: 1.0 \r\n";
$email .= "Content-Type: text/html; charset=iso-8859-1 \r\n";


$destinataire = "ahmadzai.kt@gmail.com";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$societe = $_POST['societe'];
$sujet = $_POST['sujet'];
$email = $_POST['expediteur'];

$message = "\nsociete  : " . $societe . "\nnom : " . $nom . "\nPrenom" . $prenom . "\nEmail: " . $_POST['expediteur'] . $_POST['message'];



mail( $expediteur, $sujet, $message, $email);

}

?>


<form action="" method="post">
<label for="nom">Nom :</label><br>
<input type="text" name="nom :" placeholder="Votre Nom"><br>
<label for="prenom">Prénom :</label><br>
<input type="text" name="prenom :" placeholder="Votre Prénom"><br>
<label for="text">Société :</label><br>
<input type="text" name="societe" placeholder="Société"><br>
<label for="destinataire"> Destinataire :</label><br>
<input type="text" name="destinataire =>" placeholder="Destinataire"><br>
<label for="subjet">Sujet :</label><br>
<input type="text" name="sujet :" placeholder="Sujet"><br>
<label for="text">Message :</label><br>
<textarea name="message =>"  cols="30" rows="5"></textarea>
<input type="submit" name="envoi :" >

</form>