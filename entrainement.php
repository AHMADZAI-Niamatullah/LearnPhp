<style>
h2{
    margin: 0; 
    font-size: 20px;
    color: red; 
}
</style>

<h2>Ecriture et Affichage</h2>

<?php 

//code php
//echo 'Bonjour <br> Bienvenue';

echo 'Bonjour'; // l'echo et plus rapide  //: echo est une instruction qui
// nous permet d'effectuer un affichage
echo '<br>';  // nous pouvon également y mettre du HTML
echo 'Bienvenue'; /* ceci est un conmmentaire sur 
plusieurs lignes
*/
#commentaire sur une seul ligne
echo "<br>";
print 'Nous somme le lundi';
echo "<br>";
echo '<h3>hey</h3>';// On peut melanger du html et php

?>

<h3> <?php echo 'Bonjour'; // entrée et sortie répétitive du PHP (Code moins proffessionnel) ?></h3>

<hr>

<h2>Variables</h2>


<?php 
// Déclaration d'une variable avec le signe $
$a = 123;//Affectation de la valeur 123 dans la variable nimmée "a". 
echo gettype($a);// type retourné integer

echo '<br>';
$b = 2.5;
echo gettype($b);// type retourné double

echo '<br>';
$c = "text";
echo gettype($c);// type retourné string

echo '<br>';
$d = "123";
echo gettype($d);// type retourné string

echo '<br>';
$f = true;
echo gettype($f);// type retourné boolean

echo '<br>';
$a = 130;
echo "$a";// va afficher 130 car nous avons réaffecté une evalaur à $a qui ecrase la précédente 123

echo '<br>';
$a = 35;
echo "$a";


echo '<br>';
 
$prenom = "Niamatullah";

echo "Bonjour  $prenom Comment va tu ?";// avec double " c'est une vairable ' non
echo '<br>';

echo "Je m'appelle   $prenom";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//////////////////////////////////////////////////////

$nom = 'AHMADZAI';
echo "Bonjour $nom";
echo '<br>';
echo "salut $nom";
echo '<br>';
echo "comment tu va ? $nom";
echo '<br>';
echo "bienvenue $nom";



echo '<hr><h2> Assignation par référence</h2>';

$a = 'salut';
$b = $a;
echo $a;
echo '<br>';
echo $b;
$b = $a;
echo $a;

echo '<hr>';

$a = 'salut';
$b = $a;
echo $a;
echo '<br>';
echo $b;//
$b = 130;//on essai d'affecter une nouvelle valeur à $b
//$b = &$a;//assigne par référence $a à $b
echo $a;//affiche salut et non pas 130 ( si $a change. $b change aussi)

//----------------------------------------------------------//
echo '<hr><h2> La concaténation</h2>';
$x = "bonjour";
$y = "tout le monde";
echo $x . ' ' . $y . "<br>";// point de concaténation que l'on peut traduire par "suivi de"
echo "$x $y <br>";// même chose sans concaténation

echo "salut, " . $x . ' '. $y;
echo '<br>';
echo "salut, ", $x, ' ', $y;// concaténation avec (la virgule et le point sont similaires)



echo '<hr><h2>Concaténation lors de l\'affection</h2>';
$prenom = "toto"; // affectation de la valeur "toto" sur la variable $prenom
$prenom = "tata"; // affectation de la valeur "tata" sur la variable $prenom... cela remplace toto par tata
echo $prenom ."<br>";// affiche : tata

$prenom2 = "titi";// affectation de la valeur "toto" sur la variable $prenom2
$prenom2 .= "tutu";// affectation de la valeur "toto" sur la variable $prenom2 ... 
//..cela l'ajoute  SANS remplacer la valeur précédente grâce à la l'opérator .=
echo $prenom2;


//-----------------------------------------------------------------------------//
echo '<hr><h2>Guillemets et Quotes</h2>';
$message = 'aujourd\hui';//ou bien $message = "aujourd'hui"
$txt = "Bonjour";
echo $txt . "tout le monde <br>"; //concaténation
echo "$txt tout le monde <br>";//Affichage dans des guillemets, la v ariable est évaluée
echo '$txt tout le monde <br>';// Affichage dans des quotes, la variable n'est pas évaluée


//-----------------------------------------------------------------------------------//
echo '<hr><h2>Constante et Constate magiques</h2>';
define("CAPITALE","Paris");//par convention, une constante se déclare toujours en majuscule
echo CAPITALE; '<br>';

//constante magique
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
// echo _FUNCTION_; Affiche le nom de la fonction dans laquelle nous somme 
// echo _CLASS_; Affiche le nom de la classe dans laquelle ont est
// echo _METHOD_; Affiche le nom de la methode dans laquelle ont est
//----------------------------------------------------------------------------------//
echo '<hr><h2> Exo Variable </h2>';
// Exercice : Affichez Bleu-Blanc-Rouge (avec les tirets) en mettant chaque couleur dans une variable
$blue = "bleu";
$blanc = "blanc";
$rouge = "rouge";

echo $blue.'-'.$blanc.'-'.$rouge .'<br>';
echo "$blue-$blanc-$rouge";

//---------------------------------------------------------------------------------------//
echo '<hr><h2> Operateurs Arithémiques </h2>';
$a = 10;  $b = 2;
echo $a + $b ."<br>";//Affiche 12

echo $a - $b ."<br>";//Affiche 8

echo $a * $b ."<br>";//Affiche 20

echo $a / $b ."<br>";//Affiche 5


// Operation/affectation
$a = 10; $b = 2;
$a += $b; //équipvat à $a = $a + $b, Affiche 12
echo $a."<br>";
$a -= $b;//équivaut à $a = $a - $b, Affiche 10
$a *= $b;//équivaut à $a = $a * $b, Affiche 20
$a /= $b;//équivaut à $a = $a / $b, Affiche 10




//---------------------------------------------------------------------------------------//
echo '<hr><h2> Structure Conditionnelles (if / else) - operateurs de comparaison </h2>';
// isset é empty
//empty = test si c'est vide ------ isset = test si c'est définie

$var1 = 0;
$var2 = "";
if(empty($var1)) echo 't\as variable contient 0, vide ou non définie<br>'; // there is nothing 0 
if(isset($var2)) echo 'var2 existe et est définie par rien <br>';// there is something but we don't khonw

// if,esle,elseif et operateur de comparaison
$a = 10;
$b = 5;
$c = 2;

if($a > $b)// si $a est supérieur à $b
{
    echo "A est bien supérieur à B <br>";
}
else //Sinon
{
    echo "non, A n'est pas supérieur à B <br>";
}


//--------------------------------------------------------------//
if($a > $b && $b > $c)//Si A est supérieur à B et qu'en même temps B est supérieur à c
{
    echo "ok pour le 2 conditions <br>";
}

if ($a == 9 || $b > $c)// Si A contient 9 OU que B est supérieur à c 
{
    echo "ok, au moins une  condition est bonne <br>";
}else{
    echo "aucune condition n'est bonne <br>";
}


//------------
if($a == 8)// le double egal (==) permet de vérifier une information à l'interieur d'une variable
{
    echo " 1 - A est égal à 8 <br>";
}
elseif($a != 10)//SinonSi A est defférent de 10
{
    echo " 2 - A est Différent de 10 <br>";
}
else// sinon, c'est que je ne suis ni tombé dans le if, ni dans le elseif, je me trouve dans le esle 
{
    echo " 3 - tout le monde à faux <br>";//c'est cette echo qui affiché car les é conditions précédentes n'etait pas bonnes
}

// --------------------------------//
if($a == 10 XOR $b == 6)// XOR ; seulement l'une des conditions doit être valide .
{
    echo 'ok bonne condition';// si les deux conditions sont bonnes ou, les deux conditions sont mauvaise, nous ne rentrerons pas ici
}

//---------------------------------------------------------------------------//
// Form conctracté : 2éme possibbilitée d'écriture de if
echo ($a == 10) ? "a est égal à 10 <br>" : "a n'est pas égal à 10 <br>";
// le ? pourrais remplacer le IF, les : remplace le else
// $maVar = 55;
$var1 = isset($maVar) ? $maVar : 'valeur_par_defaut';//si $maVar existe, on affecte sa valeur à $var1, sinon on y dépose une information par défaut
echo $var1 . '<br>';

$var2 = $maVar ?? 'valeur_par_defaut';//la même chose en plus court avec les ?? soit l'un soit l'autre.
echo $var2 . '<br>';

$var3 = $_GET['pays'] ?? $_GET['ville'] ?? 'pas d\information'; // soit on prend le pays, soit on prend la ville, soit on prend 'pas d'information'
echo $var3 . '<br>';

//______________________________________________//
// Comparaison
$vara = 1;
$varb = "1";
if($vara == $varb)
{
    echo "il s'agit de la même chose";
}
// avec le double égale le echo s'affiche mais pas avec le triple égal
/*
= Affection 
== Comparaison des valeurs
=== Comparaison des valeurs et du type
*/


//---------------------------------------------------------------------------------------//
echo '<hr><h2> Condition Switch </h2>';
$couleur = 'jaune';
switch($couleur)
{
    case 'bleu':
        echo 'vous aimez le bleu';
        break;

        case 'rouge':
        echo 'vous aimez le bleu';
        break;

        case 'vert':
        echo 'vous aimez le bleu';
        break;

        default: 
        echo 'vous n\aimez ni le bleu ni rouge, ni le vert..';
}


// switch($couleur){
//     case 'jaune': switch($autrevar){
//             case 'autrepossibilité': 
//                 echo..... 
//                 break;
//     }
// }

echo '<br>';

// EXERCICE : reproduisez la même chose que le switch avec des conditions

// $color = 'green';

// if($color == "yellow"){
//     echo 'vous aimez la couleur vert';
// }elseif($color == "white"){
//     echo 'vous aimez la couleur blanc';
// }elseif($color == "green"){
//         echo 'vous aimez la couleur vert';
// }else{// esle ne prend jamais les ()
//     echo 'vous aimez aucun couleur';
// }


// EXERCICE : reproduisez la même chose que le switch avec des conditions

$couleur = 'bleu';

if($couleur == "vert"){
    echo 'vous aimez la couleur vert';
}elseif($couleur == "bleu"){
    echo 'vous aimez la couleur bleu';
}elseif($couleur == "gray"){
        echo 'vous aimez la couleur gray';
}else{// esle ne prend jamais les ()
    echo 'vous  n\aimez aucun couleur';
}




?>