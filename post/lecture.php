<?php

$nom_fichier = "liste.txt";

$fichier = file($nom_fichier);// la function file fait tout el travaile, elle nous retourne chaque ligne d'un ficheier à des indices differant dans un tableau array 

//var_dump($fichier);

print "<pre>"; print_r($fichier); print "</pre>";

foreach($fichier as $element)// element your choise
{
    echo  $element.'<br>';
}


//unlink($nom_fichier);// suprime un fichier




?>