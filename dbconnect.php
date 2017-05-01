<?php
//connect to mysql database
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=votrack;charset=utf8', 'root', '');
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }

?>