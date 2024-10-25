<?php
require_once('../controllers/DetailController.php');
require_once('../models/Detail.php');


$id_detail =$_POST['id_detail'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$image0=$_POST['image0'];
$image1=$_POST['image1'];
$image2=$_POST['image2'];
$info=$_POST['info'];
$price=$_POST['price'];
$jour=$_POST['jour'];
$plan=$_POST['plan'];
$jour1=$_POST['jour1'];
$plan1=$_POST['plan1'];
$jour2=$_POST['jour2'];
$plan2=$_POST['plan2'];
$inclus=$_POST['inclus'];
$exclus=$_POST['exclus'];
$map=$_POST['map'];
$id =$_POST['id'];

$detail=new Detail($id_detail ,$pays,$ville,$image0,$image1,$image2,$info,$price,$jour,$plan,$jour1,$plan1,$jour2,$plan2,$inclus,$exclus,$map,$id);
$detailCtr=new DetailController();
$res=$detailCtr->insert($detail);


if($res==true){
	header('Location:detail_view.php');
}


?>