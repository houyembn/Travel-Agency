<?php

class Connection {
private $Email_connec,$passe_connec,$name;
function __construct($Email_connec="",$passe_connec="", $name="") {

    
    $this->Email_connec=$Email_connec;
    $this->passe_connec=$passe_connec;
    $this->name=$name;
  
   
}



public function getEmail_connec(){
	return $this->Email_connec;
}

public function getPasse_connec(){
	return $this->passe_connec;
}

public function getName(){
	return $this->name;
}





public function setEmail_connec($Email_connec){
        $this->Email_connec = $Email_connec;
    }

public function setPasse_connec($passe_connec){
        $this->passe_connec = $passe_connec;
    }

public function setName($name){
        $this->name= $name;
    }



	
}?>