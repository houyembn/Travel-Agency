<?php
include_once('../models/Connection.php') ;
include_once('../database/config.php');
class CompteController extends Modele{
function __construct() {
parent::__construct();
}

function insert(Connection $c){

    $query="insert into connecter(Email_connec,passe_connec,name)values(?, ?, ?)";
    $res=$this->pdo->prepare($query);
    
    $aryy =array($c->getEmail_connec(),$c->getPasse_connec(),$c->getName()) ;
    return $res->execute($aryy);
    
    }
function validate($data){
        $data = trim('$data');  
        $data = stripslashes('$data');
        $data = htmlspecialchars('$data');
        return $data;
      }
function liste(){
        $query = "SELECT * from connecter Where Email_connec='?' AND passe_connec='?'";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
        }
function getClient($id_connec){
          $query="SELECT * FROM connecter WHERE id_connec = ?  ";
          $res = $this->pdo->prepare($query);
          $res->execute(array([$id_connec]));
          $array= $res->fetch();
          return $array;
      }

function count() {
        $query = "SELECT COUNT(*) as total_clients FROM connecter";
        $result = $this->pdo->query($query);
    
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row['total_clients'];
          } else {
            return 0;
          }
        }

function getconnexion($Email_connec,$passe_connec){
          $query="SELECT Email_connec,passe_connec FROM connecter WHERE Email_connec = ? and passe_connec =?";
          $res = $this->pdo->prepare($query);
          $res->execute(array($Email_connec,$passe_connec));
          $array= $res->fetch();
          return $array;
      }


}


?>