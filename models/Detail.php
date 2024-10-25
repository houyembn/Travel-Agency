<?php

class Detail {
private $id_detail ,$pays,$ville,$image0,$image1,$image2,$info,$price,$jour,$plan,$jour1,$plan1,$jour2,$plan2,$inclus,$exclus,$map;
function __construct( $id_detail ="",$pays="",$ville="", $image0="",$image1="",$image2="",$info="",$price="",$jour="",$plan="",$jour1="",$plan1="",$jour2="",$plan2="",$inclus="",$exclus="",$map="") {

  
    $this->id_detail =$id_detail;
    $this->pays=$pays;
    $this->ville=$ville;
    $this->image0=$image0;
    $this->image1=$image1;
    $this->image2=$image2;
    $this->info=$info;
    $this->price=$price;
    $this->jour=$jour;
    $this->plan=$plan;
    $this->jour1=$jour1;
    $this->plan1=$plan1;
    $this->jour2=$jour2;
    $this->plan2=$plan2;
    $this->inclus=$inclus;
    $this->exclus=$exclus;
    $this->map=$map;
  
   
    

   
}

public function getId_detail(){
	return $this->id_detail ;
}

public function getPays(){
	return $this->pays;
}

public function getVille(){
	return $this->ville;
}

public function getImage0(){
	return $this->image0;
}
public function getImage1(){
	return $this->image1;
}
public function getImage2(){
	return $this->image2;
}
public function getInfo(){
	return $this->info;
}
public function getPrice(){
	return $this->price;
}
public function getJour1(){
	return $this->jour1;
}
public function getPlan(){
	return $this->plan;
}
public function getJour(){
	return $this->jour;
}
public function getplan1(){
	return $this->plan1;
}
public function getJour2(){
	return $this->jour2;
}
public function getPlan2(){
	return $this->plan2;
}
public function getInclus(){
	return $this->inclus;
}
public function getExclus(){
	return $this->exclus;
}
public function getMap(){
	return $this->map;
}






public function setId_detail($id_detail){
    $this->id_detail  = $id_detail ;
}
public function setPays($pays){
        $this->pays = $pays;
    }

public function setVille($ville){
        $this->ville = $ville;
    }

public function setImage0($image0){
        $this->image0= $image0;
    }

 public function setImage1($image1){
        $this->image1= $image1	;
    }
public function setImage2($image2){
        $this->image2= $image2	;
    }
public function setInfo($info){
        $this->info= $info	;
    }
public function setPrice($price){
        $this->price= $price	;
    }
 public function setJour($jour){
        $this->jour= $jour	;
    }
public function setPlan($plan){
        $this->plan= $plan	;
    }
public function setJour1($jour1){
        $this->jour1= $jour1	;
    }
public function setPlan1($plan1){
        $this->plan1= $plan1	;
    }
public function setJour2($jour2){
        $this->jour2= $jour2	;
    }
public function setPlan2($plan2){
        $this->plan2= $plan2	;
    }
public function setInclus($inclus){
        $this->inclus= $inclus	;
    }
public function setExclus($exclus){
        $this->exclus= $exclus	;
    }
public function setMap($map){
        $this->map= $map	;
    }







	
}?>