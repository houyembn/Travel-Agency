<?php
include_once('../models/Paquet.php') ;
include_once('../database/config.php');
class PaquetController extends Modele{
function __construct() {
parent::__construct();
}

function insert(Paquet $c){

    $query="insert into paquet(descr,price,image,id,name)values(?, ?, ?,?, ?)";
    $res=$this->pdo->prepare($query);
    
    $aryy =array($c->getName(),$c->getDescr(),$c->getPrice(),$c->getImage(),$c->getId()) ;
    
    return $res->execute($aryy);
    
    }

function liste(){
        $query = "select * from paquet";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
        }
function delete($id) {
            $query = "delete from paquet where id=?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($id));
            }

// function modifier_user(Paquet $c)
//             {
//               // UPDATE `paquet` SET `image` = 'tunis.jpg' WHERE `paquet`.`id` = 36;
//             $sql =  "UPDATE paquet SET name=?,descr=?,price=?,image = "paris.jpg"  WHERE id=?";
//             $stmt= $this->pdo->prepare($sql);
//             $stmt->execute(array($c->getName(),$c->getDescr(),$c->getPrice(),$c->getImage(),$c->getId()));
//             }

function modifier_user(Paquet $c) {
  $sql = "UPDATE paquet SET descr = ?, price = ?, image = ?, name = ? WHERE id = ?";
  $stmt = $this->pdo->prepare($sql);
  $stmt->execute(array($c->getDescr(), $c->getPrice(), $c->getImage(), $c->getName(), $c->getId()));
}


function getPaquet($id){
                $query="SELECT * FROM paquet WHERE id = ? ";
                $res = $this->pdo->prepare($query);
                $res->execute(array($id));
                $array= $res->fetch();
                return $array;
            }


function count() {
                $query = "SELECT COUNT(*) as total_clients FROM paquet";
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