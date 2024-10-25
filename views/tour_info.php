<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Client</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin1.css">
 </head>

 <body>


<section class="display-product-table">
    <h2>Vérifier les réservation</h2>
<table>
<tbody>
<?php
   
    require_once('../controllers/ClientController.php');
    $us=new ClientController();
    $res=$us->aff();
    echo "<table>
      <tr>
         
         <th>Nom et Prénom</th>
         <th> Email Address</th>
         <th>No-téléphone</th>
         <th>A partir de</t>
         <th> Nombres de personnes</th>
         <th> Statut</th>
         <th> Action</th>
      </tr>";
      if (is_array($res) || is_object($res)){
         foreach ($res as $row)
         {
            echo "<tr>";
            echo "<td>$row[nom_prenom]</td>";
            echo "<td>$row[email_tour]</td>";
            echo "<td>$row[tel_tour]</td>";
            echo "<td>$row[date_tour]</td>";
            echo "<td>$row[nb_personne]</td>";
            echo "<td>$row[statut]</td>";
            echo "<td><a href='sup.php?id_tour=$row[id_tour]' class='delete' onclick='return confirm(\"Voulez-vous vraiment supprimer cet enregistrement ?\")'><i class='fas fa-trash'></i> Supprimer</a></td>";
            echo "<td><a href='tour_info.php?edit=$row[id_tour]' class='option'><i class='fas fa-edit'></i> Mise à jour</a></td>";
            echo "</tr>";
         
      }}else{
         echo "<div class='empty'>Pas Reservation</div>";
      };

      echo "</table>";
         

         
      ?>
      </tbody>
      </table>
      </section>
      <?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
if(isset($_GET['edit'])){
    $res=$clientCtr->getClient($_GET['edit']);
?>

<section class="edit-form-container">
<form name = 'f1' method='post' action='modification.php'>

   <input type = "hidden" class="box" name = "id_tour" readonly="readonly" value = "<?php echo $res['id_tour'] ?>"/>
   <input type = "text"  class="box" name = "nom_prenom" value = "<?php echo $res['nom_prenom'] ?>"/>
   <input type = "text" class="box"  name = "email_tour" value = "<?php echo $res['email_tour'] ?>"/>
   <input type = "text"  class="box" name = "tel_tour" value = "<?php echo $res['tel_tour'] ?>"/></td>
   <input type = "text"  class="box" name = "date_tour" value = "<?php echo $res['date_tour'] ?>"/></td>
   <input type = "text" class="box" name = "nb_personne" value = "<?php echo $res['nb_personne'] ?>"/>
   <input type="submit" value="mettre à jour le produit" name="update_product" class="btn-update">
   <input type="reset" value="Annuler" id="close-edit" class="btn-Annuler">
    </form>
</section>
<?php } ?>


 
   <script>document.querySelector('.edit-form-container').style.display = 'flex';</script>

   <script>
   document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'tour_info.php';
};
  </script>


</body>

</html>



