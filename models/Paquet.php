<?php

class Paquet {
private $id,$name,$descr,$price,$image;
function __construct($id="",$name="",$descr="", $price="",$image="") {

    $this->id=$id;
    $this->name=$name;
    $this->descr=$descr;
    $this->price=$price;
    $this->image=$image;
   
}


public function getId(){
	return $this->id;
}
public function getName(){
	return $this->name;
}

public function getDescr(){
	return $this->descr;
}

public function getPrice(){
	return $this->price;
}
public function getImage(){
	return $this->image;
}



public function setId($id){
    $this->id = $id;
}
public function setName($name){
        $this->name = $name;
    }

public function setDescr($descr){
        $this->descr = $descr;
    }

public function setPrice($price){
        $this->price= $price;
    }

 public function setImage($image){
        $this->image= $image	;
    }

	
}?>