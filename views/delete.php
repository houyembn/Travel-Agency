<?php
require_once('../controllers/PaquetController.php');
$paquetCtr=new PaquetController();
$paquetCtr->delete($_GET['id']);
header('Location:paquet_view.php');
?>