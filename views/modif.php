<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$res=$clientCtr->getClient($_GET['id_tour']);
?>
<form name = 'f1' method='post' action='modification.php'>

<table border='1'>

	<tr>
<td>id</td>
<td><input type = "text" name = "id_tour" readonly="readonly" value = "<?php echo $res['id_tour'] ?>"/></td></tr>
<tr>
<td>Nom et Prénom</td>
<td><input type = "text" name = "nom_prenom" value = "<?php echo $res['nom_prenom'] ?>"/></td></tr>
<tr>
<td>Email Address</td>
<td><input type = "text" name = "email_tour" value = "<?php echo $res['email_tour'] ?>"/></td></tr>
<tr><td>No-téléphone</td>
<td><input type = "text" name = "tel_tour" value = "<?php echo $res['tel_tour'] ?>"/></td></tr>
<tr>
<td>A partir de</td>
<td><input type = "text" name = "date_tour" value = "<?php echo $res['date_tour'] ?>"/></td></tr>
<td>Nombres de personnes</td>
<td><input type = "text" name = "nb_personne" value = "<?php echo $res['nb_personne'] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>

