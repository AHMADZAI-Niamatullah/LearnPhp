
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


$expediteur = "From: $_POST[expediteur] \n";
$expediteur .= "MIME-Version: 1.0 \r\n";
$expediteur .= "Content-Type: text/html; charset=iso-8859-1 \r\n";
}
//phpinfo();
?>






<form action="" method="post">

<label for="destinataire"> Destinataire :</label><br>
<input type="text" name="destinataire" placeholder="Destinataire"><br>
<label for="expediteur">Expediteur :</label><br>
<input type="text" name="expediteur" placeholder="Expediteur"><br>
<label for="subjet">Sujet :</label><br>
<input type="text" name="sujet" placeholder="Sujet"><br>
<label for="text">Message :</label><br>
<textarea name="message" id="" cols="30" rows="5"></textarea>
<input type="submit" name="envoi" value="Envoi">

</form>