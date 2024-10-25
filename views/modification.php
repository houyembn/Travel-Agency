<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$clientCtr=new ClientController();
$client=new Client();


$client->setId_tour($_POST['id_tour']);
$client->setNom_prenom($_POST['nom_prenom']);
$client->setEmail_tour($_POST['email_tour']);
$client->setTel_tour($_POST['tel_tour']);
$client->setDate_tour($_POST['date_tour']);
$client->setNb_personne($_POST['nb_personne']);
$clientCtr->modifier_user($client);
header('Location:tour_info.php');

?>