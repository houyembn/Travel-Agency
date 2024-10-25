<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$clientCtr->delete($_GET['id_tour']);
header('Location:tour_info.php');
?>
