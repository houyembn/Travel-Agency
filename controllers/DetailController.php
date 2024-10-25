<?php
include_once('../models/Detail.php') ;
include_once('../database/config.php');
class DetailController extends Modele{
function __construct() {
parent::__construct();
}

function insert(Detail $c){

    $query="insert into detail(pays,ville,image0,image1,image2,info,price,jour,plan,jour1,plan1,jour2,plan2,inclus,exclus,map,id)values(?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?)";
    $res=$this->pdo->prepare($query);
    
    $aryy =array($c->getPays(),$c->getVille(),$c->getImage0(),$c->getImage1(),$c->getImage2(),$c->getInfo(),$c->getPrice(),$c->getJour(),$c->getPlan(),$c->getJour1(),$c->getPlan1(),$c->getJour2(),$c->getPlan2(),$c->getInclus(),$c->getExclus(),$c->getMap(),$c->getId()) ;
    
    return $res->execute($aryy);
    
    }

    //$query = "SELECT * from detail WHERE id_detail=$ide"; 
function liste(){
    //  var_dump($_GET[id]);
        $query = "select * from detail  where id=$_GET[id]";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
        }

function info(){
          //  var_dump($_GET[id]);
              $query = "select * from detail";
              $res=$this->pdo->prepare($query);
              $res->execute();
              return $res;
              }

function delete($id_detail) {
            $query = "delete from detail where id_detail=?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($id_detail));
            }

function getDetail($id_detail){
                $query="SELECT * FROM detail WHERE id_detail= ? ";
                $res = $this->pdo->prepare($query);
                $res->execute(array($id_detail));
                $array= $res->fetch();
                return $array;
            }


function count() {
        $query = "SELECT COUNT(*) as total_clients FROM detail";
        $result = $this->pdo->query($query);
    
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row['total_clients'];
          } else {
            return 0;
          }
        }


function modifier_user(Detail $c) {
  
          $sql = "UPDATE detail SET pays = ?, ville = ?, price = ?, image0 = ? WHERE id_detail = ?";
          $stmt = $this->pdo->prepare($sql);
          $stmt->execute(array($c->getPays(), $c->getVille(), $c->getPrice(), $c->getImage0(), $c->getId_detail()));
        }
















}


?>