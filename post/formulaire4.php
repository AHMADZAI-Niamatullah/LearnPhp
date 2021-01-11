<?php

echo '<h1>'.'Formulaire 4 '. '</h1>';

                                // if($_POST){
                                //     $pseudo1 = $_POST['pseudo1'] .'<br>';
                                //     $pseudo2 = $_POST['pseudo2'].'<br>';
                                //     $email = $_POST['email'].'<br>';

                                //     echo $pseudo1;
                                //     echo $pseudo2;
                                //     echo $email;
//     }


                            // if($_POST){
                            //     $pseudo1 = $_POST['pseudo1'] .'<br>';
                            //     $pseudo2 = $_POST['pseudo2'].'<br>';
                            //       $email = $_POST['email'].'<br>';
                            
                            //     echo "Prénom :" . $pseudo1;
                            //     echo "Nom :" . $pseudo2;
                            //     echo "Email :" . $email;
                            //     }
//////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
// correc
    // if($_POST)// faite in sorte que le champs pseudo 
    // {
    //     echo  $_POST['pseudo'];
    //     echo $_POST['email'];
    // }

    /////////////////////////////////:
    //
    //
// if($_POST)// faite in sorte que le champs pseudo ne puisse pas être vide en affichant un 
//     //message d'erreur dans ce case la.
// {    
//     if(strlen($_POST['pseudo']) == 0 || strlen($_POST['email']) == 0 ){
//             echo "vous devez remplir toutes les informations";
 
//      }else{
//         echo "Pseudo :" . ' ' . $_POST['pseudo'] . '<br>';
//         echo "Email :" . ' '  . $_POST['email']. '<br>';
//      }
// }
    




if($_POST)// faite in sorte que le champs pseudo ne puisse pas être vide en affichant un 
    //message d'erreur dans ce case la.
{    
    if(strlen($_POST['pseudo']) == 0 || strlen($_POST['email']) == 0 || strpos($_POST['email'],"@") == false){
            echo "vous devez remplir toutes les informations";
 
     }else{
        echo "Pseudo :" . ' ' . $_POST['pseudo'] . '<br>';
        echo "Email :" . ' '  . $_POST['email']. '<br>';
     }

     $f = fopen("liste.txt", "a");//fopen() en mode "a" permet créer le fichier s'il n'est pas trouvé, sinon l'ouvrire

     fwrite($f, $_POST['pseudo'] . "-" . $_POST['email']);// fwrite() permet d'écrir dans le ficher $f qui est texte.txt
     fwrite($f, "\n");// \n entre guillemet permet de faire un saut à la ligne dans un fich
     $f = fclose($f);//fclose, qui n'est pas indisponible, permet  de former le ficher et ainsi liberer la resousrce.
}
    
//extract($_POST);//cette function créer des variables dont les nom sont les indices du tableau $_POST et affecte la  valeur associée;
// echo $pseudo;

 

?>