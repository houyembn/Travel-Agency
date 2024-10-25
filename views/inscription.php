<?php
require_once('../controllers/CompteController.php');
require_once('../models/Connection.php');
$Email_connec=$_POST['Email_connec'];
$passe_connec=$_POST['passe_connec'];
$name=$_POST['name'];
$compte=new Connection($Email_connec,$passe_connec,$name);
$compteCtr=new CompteController();





if (isset($_POST['name']) && isset($_POST['Email_connec']) && isset($_POST['passe_connec'])) {
    $res=$compteCtr->validate($compte);
    $user_data = 'Email_connec=' . $Email_connec . '&name=' . $name;

    if (empty($name)) {
        header("Location: compte.php?error=Nom est obligatoire&$user_data");
        exit();
    } else if (empty($Email_connec)) {
        header("Location: compte.php?error=Adresse e-mail obligatoire&$user_data");
        exit();
    } else if (empty($passe_connec)) {
        header("Location: compte.php?error=Mot de passe est obligatoire&$user_data");
        exit();
    }else if( strlen($passe_connec)<8){
        header("Location: compte.php?error=Mot de passe doit être de 8 caractères ou plus&$user_data");
        exit();
    } else {
        
        $res=$compteCtr->insert($compte);
        if ($res == true) {
            header("Location: compte.php?success=Votre compte a été créé avec succès&$user_data");
            exit();
       }else {
        header("Location: compte.php?error=Une erreur inconnue s'est produite&$user_data");
            exit();
       }
        }
    
} else {
    header("Location: compte.php");
    exit();
}


?>