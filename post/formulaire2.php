<hr>
<hr>
<?php
/*
Exercice : créez un formulaire avec les champs suivants: Ville,cp,addresse puis puis 
récuperez  les saisies sur la même page
*/

if($_POST){
    echo "Ville => " . $_POST['ville']. '<br>';
    echo "Code Postal => " . $_POST['code_postal']. '<br>';
    echo "Addresse => " . $_POST['addresse']. '<br>';
    }
    

    echo '<hr>';

    if($_POST){
        echo  $_POST['ville'];
        echo  $_POST['code_postal'];
        echo  $_POST['addresse'];
        }



?>

    <hr>
    <hr>
    <h1>Formulaire 2</h1>
        <form method="POST">
        <label for="text">Ville :</label>
        <input type="text" name="ville">
        <br>
        <label for="number">Code Postal :</label>
        <input type="text" name="code_postal">
        <br>
        <label for="text">Addresse :</label>
        <input type="text" name="addresse">
        <br>
        <input type="submit" name="envoie">
    </form>
