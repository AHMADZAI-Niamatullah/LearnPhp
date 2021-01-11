<!-- Exercice : faite un un qui point vers la page1.php -->
<h1>Page 2</h1>
<?php
// $_GET représente l'url, il s'agit d'une supergloble, si elle n'est pas ecrite en majuscule ça ne marchera pas.
if($_GET)// si le $_GET n'est pas vide, c'est qu'iil y a des informations
{
print "parametre1: " . $_GET['article'] . "<br />";
print "parametre1: " . $_GET['couleur'] . "<br />";
print "parametre1: " . $_GET['prix'] . "<br />";
}
print "<pre>"; print_r($_GET); print "</pre>";

var_dump($_GET);

//?article=jean&couleur=bleu&prix=10
// ?cle=valeur&cle=valeur&cle=valeur
//pour accéder à une valeur via $_GET on précise la cle entre crochets $_GET [clé] car $_GET comme toutes autre superglobale est un ARRAY

?>