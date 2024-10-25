<?php
include_once('../models/Client.php') ;
include_once('../database/config.php');
class ClientController extends Modele{
function __construct() {
parent::__construct();
}

function insert(Client $c){
   
      $query="insert into tour(nom_prenom,email_tour,tel_tour,date_tour,nb_personne)values(?, ?, ?, ?, ?)";
      $res=$this->pdo->prepare($query);
      
      $aryy =array($c->getNom_prenom(),$c->getEmail_tour(),$c->getTel_tour(),$c->getDate_tour(),$c->getNb_personne());
      
      return $res->execute($aryy);
      
      }
      
function getClient($id_tour){
      $query="SELECT * FROM tour WHERE id_tour = ? ";
      $res = $this->pdo->prepare($query);
      $res->execute(array($id_tour));
      $array= $res->fetch();
      return $array;
  }

function liste(){
   $query = "select * from tour";
   $res=$this->pdo->prepare($query);
   $res->execute();
   return $res;
   }

function aff(){
      $query = "select * from tour where id_tour=42";
      $res=$this->pdo->prepare($query);
      $res->execute();
      return $res;
      }

function delete($id_tour) {
      $query = "delete from tour where id_tour=?";
      $res=$this->pdo->prepare($query);
      return $res->execute(array($id_tour));
      }

function modifier_user(Client $c)
      {
      $sql = "UPDATE tour SET  nom_prenom=?,email_tour=?,tel_tour=?,date_tour=?,nb_personne=? WHERE id_tour=?";
     // UPDATE `tour` SET `nom_prenom` = 'katia youyoua', `tel_tour` = '2151440', `date_tour` = '2023-04-07', `nb_personne` = '3' WHERE `tour`.`id_tour` = 1;

      $stmt= $this->pdo->prepare($sql);
      $stmt->execute(array($c->getNom_prenom(),$c->getEmail_tour(),$c->getTel_tour(),$c-> getDate_tour(),$c->getNb_personne(),$c->getId_tour()));
      }

function count() {
            $query = "SELECT COUNT(*) as total_clients FROM tour";
            $result = $this->pdo->query($query);
        
            if ($result->rowCount() > 0) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                return $row['total_clients'];
              } else {
                return 0;
              }
            }

  





}


?>

