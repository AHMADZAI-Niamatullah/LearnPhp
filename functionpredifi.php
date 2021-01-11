<?php

//---------------------------------------------------------------------------------------//
echo '<hr><h2> function prédefinies </h2>';
echo '<br> Date : <br>';
print date("d/m/y");

echo '<br>';

//---------------------------------------------------------------------------------------//
echo '<hr><h2> function prédefinies : Traitement de chaines (iconv_strlen,strpos,substr) / </h2>';

$email1 = "coucou@gmail.fr";
echo strpos($email1, "@");

echo '<br>';
//------------------
$email2 = "hello";
echo strpos($email2, "@");//erreur
var_dump(strpos($email2, "@"));

echo '<br>';
/*
strpos est une function prédifinie permettant de trouver la position d'un caractére dans 
une chaines de caratéres.
Succés : integer (int)
echec : boolean false (boolean)
Arguments :
        1. nous devons lui fournir  la chaine dans la quelle nous souhaitons chercher
        2. nous devons lui fournir l'information chercher
*/

//-----------
$Phrase = "voici une phrase ou une chaine";
echo iconv_strlen($Phrase);
echo '<br>';
/*
iconv_strlen() est une function prédéfinie permettant de retourenr la taille d'une chaine:
Succés : integer (int)
echec : boolean false (boolean)
Arguments :
        nous devons lui fournir  la chaine dans la quelle nous souhaitons connaitre  la taille
*/
$texte = "Loremipsum dolor sit, amet consectetur adipisicing elit. Architecto, vero.";
echo substr($texte,0, 10);
echo '<br>';
echo substr($texte,0, 10). "....<a href=''>lire la suite </a>";
/*
substr() est une function prédéfinie permettant de retourenr une partir de la chaine:
Succés : integer (int)
echec : boolean false (boolean)
Arguments : boolean false
       1. nous devons lui fournir  la chaine que l'on souhiate couper
       2. nous devons lui préciser la position  de debut
       3. nous devons lui préciser la position  de fin
*/

//---------------------------------------------------------------------------------------//
echo '<hr><h2> Functioin utilisateur </h2>';
// les function qui ne sont pas définies dan le langage sont déclaré puis exécuté par 
// l'utilisateur

function separation()//déclaration d'une functoin prévu pour ne pas recevoir d'arguments
{
    echo '<hr><hr><hr>';
}

separation();// exécution
//--------------
echo '<br>';

// function avec arguments :

function Bonjour($qui)
{
    return "Bonjour $qui <br>";
}

Bonjour('Niamatullah');

$prenom = 'Niamatullah';
// exécution 
// la function bonjour () attend toujour un argument qui est obligatoire peu l'exction      
echo Bonjour($prenom);//l'argument peut être une vairable
echo Bonjour("Niamatullah");// mais aussi une chaine
//------------------------------------------/

function appliqueTva($nombre)
{
    return $nombre*1.2;
}

echo appliqueTva(100);

//---- Exercice : Pourrez-vous améliorer cette fonction afin que l'on puisse calculé
// un nombre avec les taux de notre choix (19.6%, 5.5%, 7% )

echo '<br>';

function appliqueTva2($nombre, $tva)
{
    return $nombre*$tva;
}

echo appliqueTva(100, 1.2);

echo '<br>';

///////////////////////

function appliqueTva3($nombre, $tva = 1.2)
{
    return $nombre*$tva;
}

echo '100€ avec une tva à 7% font :' .appliqueTva3(100, 1.07);

echo '<br>';



//-------
// Exercice météo   
meteo("hiver", "2");
function meteo($saison, $temperature)
{
    echo "nous somme en $saison et il fait $temperature degré(s)<br>";
}

// // Exercice exometeo gérez le s de degré  en function de la température
// exometeo("hiver", "0");
// function exometeo($saison1, $temperature1)
// {
//     echo "nous somme en $saison1 et il fait $temperature1 degré <br>";
// }

// // Exercice exometeo gérez le s de degré  en function de la température
// exometeo1("été", "32");
// function exometeo1($saison2, $temperature2)
// {
//     echo "nous somme en $saison2 et il fait $temperature2 degré(s) <br>";
// }
 

// Exercice exometeo gérez le s de degré  en function de la température

function exometeo($saison, $temperature)
{
    echo "nous somme en $saison et il fait $temperature degré<br>";
    if($temperature < -1 || $temperature > 1)
    {
        echo "s";
    }
}
exometeo("été", "1");


echo '<br>';
//--------------------------

function jourSemaine()
{
    $jour = "Lundi";//variable local 
    return  $jour;// une function peut retourner qq chose(a ce moment la on quitte la function)
    echo 'coucou';// /!\  cette ligne ne sortira jamais car il y a un return avant
}
//echo $jour // ne s'affiche pas car $jour est une variable local 
echo jourSemaine();// affiche 'lundi' et pas le 'coucou' qui lui est aprés le return

echo '<br>';

// -------------------------------------
$pays = "France";// c'est global

function affichePays()
{
    global $pays;
    echo $pays;
}
affichePays();


echo '<br>';
//----------------------------------------------------------------//
function facultatif()//function avec arguments facultatifs
{
    print "<pre>"; print_r(func_get_args()); print "<pre>";
    //$array = func_get_args();
    foreach(/*$array*/func_get_args() as $indice => $element)//func_get_arg() permet d'obtenir un tableau avec les arguments passés.
    {
        echo $indice, "->", $element, "<br>";
    }
}
facultatif();
facultatif( "France", "Italie", "Algerie", 10);
facultatif("allo");


echo '<hr>';

// on précise on amont le type obligatoire des valeurs entrantes des arguments
function identite(string $nom, int $age)
{
    return $nom .'a' .$age . 'ans';
}
echo identite('Niamatullah' , 25) . "<br>";

//--------------------
// on précise on amont la valeur de retour que doit ressortir de function
function isAdulte(int $age) :bool
{
    return $age >= 18;
}
var_dump(isAdulte(21));


echo '<hr>';

//---------------------------------------------------------------------------------------//
echo '<hr><h2> structure itérative :Boucle  </h2>';
$i = 0;//valeur de depart
while($i < 3)//tant que $i est inferieur à 3
{
    echo "$i---";// affiche moi $i
    $i++;// ceci est une forme contracté  de : $i = $i + 1; c'est l'incrémentation du compteur
    //et elle est effectué à chaque tour
    //affiche "0---1---2---
}

echo '<hr>';

// Exercice : faite en sorte  de ne pas avoir les tirets à la fin: 0--1--2

$j = 0;

while($j < 3)
{
     if($j < 2){// je rentre 2 fois tant que $j est inferieur 2
         echo "$j---";
     }else{// je rentre une fois  quand $j est égal à 2
         echo "$j";
     }
     $j++;
}


echo '<hr>';

//---------------------------------------------------//
// Boucle for
for ($j = 0;   $j < 15;   $j++)
{
    print $j. '<br>';
}


// Exercice : Affichez 30 options via une boucle

// echo '<select>';
// echo '<option>1</option>';
// echo '<option>2</option>';
// echo '</select>';

//correction

echo '<select>';
for($tour = 1;   $tour <= 30;   $tour++)
{
echo "<option>$tour</option>";
}
echo '</select>';


//--------------------------------------------------------------------------------------//
// Exercice : faites une boucle qui affiche de 0 à 9 sur la même ligne dans un tableau

echo '<table  border = 1><tr>';
for($tb = 0;  $tb <= 9;  $tb++)
{
    echo "<td>$tb<td>";
}
echo '</tr></table>';



echo '<hr>';
//-----------------------------------------------------------------------------------------//
// Exercice faites la même chose en allant 0 à 99 sur plusieur lignes sans faire 10 boucle,

echo '<table border = "1">';
for($ligne = 0;  $ligne < 10;  $ligne++)
{
    print "<tr>";
    for($cellule = 0;  $cellule < 10;  $cellule++)
    {
        print "<td>" . (10 * $ligne + $cellule). "</td>";//10*0 + 0,  10*0 + 1,  10*0+2..........................10*9+9 fin des boucle car la suite
    }
    print "</tr>";

}
echo '</table>';



////////////////////////////////////////
// exercice

// echo "<table>";
// while($i <= 99){





// }

//-------------------------------------------------------------------------------//

echo '<hr><h2>Inclusion de fichiers</h2>';


echo "premiere fois:";
include("exemple.inc.php");

echo'<br>';

echo "Deuxieme fois:";
include_once("exemple.inc.php");

echo '<br>';

echo "Troisième fois :";
require("exemple.inc.php");

echo '<br>';

echo "Quatrième fois :";
require_once("exemple.inc.php");
// la Differance entre un "include()" et "include_once()" c'est que le premier peut faire
// pareil pour le "require()" et le "require_once()"
//il n'y a aucune differance entre include et require, sauf en cas d'erreur du fichier
// - include fait un erreur  et continue l'excution du code 
// - le require fait une erreur et stop l'execution du code 
 

//-----------------------------------------------------------------------------------//
echo '<hr><h2>Tableau de données ARRAY</h2>';
$liste = array("Niamatullah","David","Ornella","Charly","Sara","Amine");
echo "<br> print_r: ";// s'affiche tous qu'on écrit
print_r($liste);// print_r() affiche le contenu du tableau 
print "<pre>"; print_r($liste); print "</pre>";//<pre> est une balise HTML permettant de formater le text, cela nous permet de mettre en forme la sortie du print_r

echo '<hr>';

echo "<br>var_dump : ";
print "<pre>"; var_dump($liste); print "</pre>";// var_dump() affiche le contenu du tableau plus certaines informations comme le type de variables...


echo '<hr>';
//----------------------------------------------------------------------------//
echo '<hr><h2>Boucle Foreache pour les tableau de données Array</h2>';

$tab[] = "France";// autre moyen d'affecter une valeur dans un tableau. le mot clé Array est remplacé par.
$tab[] = "Italie";
$tab[] = "Espagne";
$tab[] = "Angleterre";
$tab[] = "Suisse";
$tab[] = "Portugal";
print "<pre>"; print_r($tab); print"</pre>";
//Exercice : tentez de m'afficher Angleterre en passant par le tableau
echo $tab[3];

echo '<hr>';
//exercice : afficher successivement les éléments du tableau
//echo $tab[0]. ' ' . $tab[1]. ' ' . $tab[2]. ' ' . $tab[3]. ' ' . $tab[4]

foreach($tab as $element)
{
    echo  $element.'<br>';
}

echo '<hr>';

//recuperez les incices et le valeur en les affichant sur cette forme : indice-valeur

foreach($tab as $indice => $valeur)// quand  il y 2 variable, la premiére parcour la colonne des indices et la 2éme la cololle des valeur
{
    
    echo $indice. ' ' .$element."<br>";
}

//-----------------------------------------//
$couleur = array("j" => "jaune",  "b" => "bleu",   "v" => "vert");// on peut choisir notre indice, ici "j" , "b" , "v"
     print "<pre>"; print_r($couleur); print"</pre>";

     echo 'taille du tableau' . sizeof($couleur) . '<br>';// affiche 3
     echo 'taille du tableau' . count($couleur) . '<br>';// count est pareil que sizeof qui renoie la taille d'un tableau pas de differance

     //print implode("-", $couleur) . '<br>';// implode() est une function prédéfinie qui rassemble d'un tableau en une chiane



//----------------------------------------------------------------------------//
echo '<hr><h2>Tableau Multidimentionnel</h2>';
// nous parlons de Tableau Multidimentionnel quand un tableau est contenu dans un autre tableau.
$tab_multi = array(0 => array("prenom" => "Muhammet", "nom" => "Karahan"), 1 => array("prenom" => "Jordan", "nom" => "Moutawakil"), 2 => array("prenom" => "Niamatullah", "nom" => "Ahmadzai"));
print "<pre>"; print_r($tab_multi); print"</pre>";

// exercice : affichez Jordan an passant par le tableu
echo $tab_multi[1]['prenom'];
echo '<br>';
echo '<br>';
print_r($tab_multi[1]);

echo '<hr>';

//------------------------------------


//for($i = 0;  $i < count($tab_multi);  $i++)// tant que $i est inferieur au nombre d'élément du tableau (et non  <= ) car il y a 3 élément dans le tableau
// nous voulons faire 0, 1,
for($i = 0;  $i < sizeof($tab_multi);  $i++)// tant que $i est inferieur au nombre d'élément du tableau (et non  <= ) car il y a 3 élément dans le tableau 
{
    echo $tab_multi[$i]['prenom'] . '<br>';// on affiche l'élément du tableau d'indice $i
    //print $tab_multi[$i]['prenom'] . '<br>';
}

echo '<hr>';








?>
