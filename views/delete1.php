<?php
   require_once('../controllers/DetailController.php');
$detailCtr=new DetailController();
$detailCtr->delete($_GET['id_detail']);
header('Location:detail_view.php');
?>