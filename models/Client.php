<?php

class Client {
private $id_tour,$nom_prenom,$email_tour,$tel_tour,$date_tour,$nb_personne,$statut,$id;
function __construct($nom_prenom="",$email_tour="", $tel_tour="",$date_tour="",$nb_personne="",$statut="",$id="",$id_tour="") {

    $this->id=$id;
    $this->id_tour=$id_tour;
    $this->nom_prenom=$nom_prenom;
    $this->email_tour=$email_tour;
    $this->tel_tour=$tel_tour;
    $this->date_tour=$date_tour;
    $this->nb_personne=$nb_personne;
    $this->statut=$statut;
}

public function getId(){
	return $this->id;
}
public function getId_tour(){
	return $this->id_tour;
}
public function getNom_prenom(){
	return $this->nom_prenom;
}

public function getEmail_tour(){
	return $this->email_tour;
}

public function getTel_tour(){
	return $this->tel_tour;
}
public function getDate_tour(){
	return $this->date_tour;
}
public function getNb_personne(){
	return $this->nb_personne;
}
public function getStatut(){
	return $this->statut;
}

public function setId($id){
    $this->id = $id;
}
public function setId_tour($id_tour){
    $this->id_tour = $id_tour;
}
public function setNom_prenom($nom_prenom){
        $this->nom_prenom = $nom_prenom;
    }

public function setEmail_tour($email_tour){
        $this->email_tour = $email_tour;
    }

public function setTel_tour($tel_tour){
        $this->tel_tour= $tel_tour;
    }

 public function setDate_tour($date_tour){
        $this->date_tour = $date_tour	;
    }
public function setNb_personne($nb_personne){
        $this->nb_personne = $nb_personne	;
    }
public function setStatut($statut){
        $this->statut = $statut	;
    }
	
}?>