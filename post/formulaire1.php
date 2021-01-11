<?php

//var_dump($_POST); retourne un ARRAY
// $_POST (en majouscule) est une superglobale qui sert à recupérer les saisies d'un formulaire  de les afficher sur la page web.

if($_POST){
echo "prenom : " . $_POST['prenom']. '<br>';
echo "description : " . $_POST['description']. '<br>';
}

?>




<!DOCTYPE html>
<html>
<head>
   <style>
   lable{float: left; width: 95px; font-style:italic; font-family: calibri;}
   h1{margin: 0 0 10px 200px; font-family: calibri;}
   </style>
</head>
<body>
    
    <hr>
    <h1>Formulaire 1</h1>
    <form method="post" action="">
    <label for="">Prenom</label>
    <input type="text" name="prenom" id="prenom">
    <br>
    <label for="">Description</label>
    <textarea name="description" id="description"></textarea>
    <input type="submit">
    </form>
</body>
</html>