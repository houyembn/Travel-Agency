<?php
require_once('../controllers/DetailController.php');
require_once('../models/Detail.php');
$detailCtr=new DetailController();
$detail=new Detail();

$detail->setId_detail($_POST['id_detail']);
$detail->setPays($_POST['pays']);
$detail->setVille($_POST['ville']);
$detail->setPrice($_POST['price']);
$detail->setImage0($_POST['image0']);
$detailCtr->modifier_user($detail);
header('Location:detail_view.php');

?>