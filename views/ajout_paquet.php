<?php
require_once('../controllers/PaquetController.php');
require_once('../models/Paquet.php');
 
$name=$_POST['name'];
$descr=$_POST['descr'];
$price=$_POST['price'];
$image=$_POST['image'];
$paquet=new Paquet($name,$descr,$price,$image);
$paquetCtr=new PaquetController();
$res=$paquetCtr->insert($paquet);


if($res==true){
	header('Location:paquet_view.php');
}


?>