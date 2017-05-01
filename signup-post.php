<?php
 session_start();

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=votrack;charset=utf8', 'root', '');
    }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
    }



        if ($_POST['password'] == $_POST['confirm_password']) {

            // INSERTION du profil dans la BDD
            $req = $bdd->prepare('INSERT INTO members (username, password, email) VALUES(?, ?, ?)');

            $req->execute(array($_POST['username'], $_POST['password'], $_POST['email']));
            header('Location: signedup.php');
            exit;

        } else {

            $_SESSION['error'] = "Passwords don't match";
            header('Location: http://127.0.0.1/compareit/signup.php');
            exit;
        }


?>