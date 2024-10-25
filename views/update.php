<?php
require_once('../controllers/PaquetController.php');
require_once('../models/Paquet.php');
$paquetCtr=new PaquetController();
$paquet=new Paquet();

$paquet->setId($_POST['id']);
$paquet->setName($_POST['name']);
$paquet->setDescr($_POST['descr']);
$paquet->setPrice($_POST['price']);
$paquet->setImage($_POST['image']);
$paquetCtr->modifier_user($paquet);
header('Location:paquet_view.php');

?>