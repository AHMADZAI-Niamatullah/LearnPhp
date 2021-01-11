<?php

//----------------------------------------------------------------------------//
echo '<hr><h2>Objets</h2>';
// un objet est un autre type de données, un peu comme un Array, il permet de regrouper des information, cependant, cela va beaucoup plus loin car on peux y déclarer des 
// variables (appelées : attributs ou propriétés ) mais aussi des functions (appelées : méthodes)

class Etudiant
{
   public $prenom = "Rachid"; // public permet de préciser que l'élément sera accessible partout dans le code. il exist aussi protected et private.
   public $age = 25;

   public function pays()
   {
        return "France";
   }
}

$objet = new Etudiant();// new est mot clés permettant d'instancier la class et d'en faire un objet c'est ce qui nous permet de 
//la déployer afin qui l'on puisse s'en servir. on se sert de ce qui est dans la classe via l'objet ! 

print "<pre>"; var_dump($objet); print"</pre>";

echo $objet->prenom. '<br>'; // nous pouvons accéder à un indice d'un tableau avec [], mais dans un objet on accéde aux propriétés et methode avec "->"
echo $objet->age. '<br>';
echo $objet->pays(). '<br>'; // l'appel d'une methode se fait toujours avec les ()
 

echo '<hr>';
//-----------------------------------------------------------------------------------//
goto b;// on va au point "b"
echo 'Bonjour';// cette ligne ne s'affiche et ne s'éxecute pas 

b://on arrive au point "b"

echo 'hello';// aprés le point "b" le code s'exécute normalment

//phpinfo();





?>