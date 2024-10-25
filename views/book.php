<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');



$nom_prenom=$_POST['nom_prenom'];
$email_tour=$_POST['email_tour'];
$tel_tour=$_POST['tel_tour'];
$date_tour=$_POST['date_tour'];
$nb_personne=$_POST['nb_personne'];


$client=new Client($nom_prenom,$email_tour,$tel_tour,$date_tour,$nb_personne);
$clientCtr=new ClientController();


$res=$clientCtr->insert($client);
//echo $client->getNcin();

if($res==true){
	header('Location:detail_page.php');
}


?>