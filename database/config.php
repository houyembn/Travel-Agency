<?php
abstract class Modele {
protected $pdo;
function __construct()
{
$this->pdo =new PDO('mysql:host=localhost;dbname=web_voyage','root','');
}
function __destruct()
{
$this->pdo=null;
}



}
?>