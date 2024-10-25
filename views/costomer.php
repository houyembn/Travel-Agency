<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Client</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin.css">
 </head>

 <body>
 <?php include 'admin1.php' ;?>

<section class="display-product-table">
    <h2>Vérifier les réservation</h2>
<table>
<tbody>
<?php

   
    require_once('../controllers/ClientController.php');
    $us=new ClientController();
    $res=$us->liste();
    echo "<table>
      <tr>
         
         <th>Nom et Prénom</th>
         <th> Email Address</th>
         <th>No-téléphone</th>
         <th>A partir de</t>
         <th> Nombres de personnes</th>
         <th> Statut</th>
         
         
         
      </tr>";
      if (is_array($res) || is_object($res)) {
         foreach ($res as $row) {
             echo "<tr>";
             echo "<td>$row[nom_prenom]</td>";
             echo "<td>$row[email_tour]</td>";
             echo "<td>$row[tel_tour]</td>";
             echo "<td>$row[date_tour]</td>";
             echo "<td>$row[nb_personne]</td>";
             echo "<td>";
             echo "<form method='post'>";
             echo "<select name='statut' onchange='this.form.submit()'>";
             echo "<option value=''>mise à jour de l'état</option>";
             echo "<option value='En attente'" . ($row["statut"] == "En attente" ? " selected" : "") . ">En attente</option>";
             echo "<option value='Accepter'" . ($row["statut"] == "Accepter" ? " selected" : "") . ">Accepter</option>";
             echo "<option value='Rejecter'" . ($row["statut"] == "Rejecter" ? " selected" : "") . ">Rejecter</option>";
             echo "</select>";
             echo "<input type='hidden' name='id_tour' value='$row[id_tour]' />";
             echo "</form>";
             echo "</td>";
             echo "</tr>";
         }
     }
      echo "</table>";
      ?>

      </tbody>
      </table>
      </section>
</body>

</html>



