<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin1.css">
 </head>

 <body>


<?php include 'admin1.php' ;?>
<section class="paquet">
    <h3>Ajouter un nouveau plan</h3>

    <form name="form1" method="post" class="add-product-form" action="ajout_detail.php">

    <input type="text" name="id" placeholder="donner l'id du pays" id="id" class="box" required>
    <input type="text" name="pays" placeholder="donner le nom du pays" id="pays" class="box" required>
    <input type="text" name="ville" placeholder="donner les villes à visiter" id="ville" class="box" required>
    <input type="file" name="image0" accept="image/png, image/jpg, image/jpeg" class="box" id="image0" required>
    <input type="file" name="image1" accept="image/png, image/jpg, image/jpeg" class="box" id="image1" required>
    <input type="file" name="image2" accept="image/png, image/jpg, image/jpeg" class="box" id="image2" required>
    <input type="text" name="info" placeholder="donner les informations" class="box" id="info" required>
    <input type="text" name="price" placeholder="donner le prix" class="box" id="price" required>
    <input type="text" name="jour" placeholder="donner le 1er nb des jours" class="box" id="jour" required>
    <input type="text" name="plan" placeholder="donner le 1er plan " class="box" id="plan" required>
    <input type="text" name="jour1" placeholder="donner le 2eme nb des jours" class="box" id="jour1" required>
    <input type="text" name="plan1" placeholder="donner le 2eme plan" class="box" id="plan1" required>
    <input type="text" name="jour2" placeholder="donner le 3eme nb des jours" class="box" id="jour2" required>
    <input type="text" name="plan2" placeholder="donner le 3eme plan" class="box" id="plan2" required>
    <input type="text" name="inclus" placeholder="donner les inclus" class="box" id="inclus" required>
    <input type="text" name="exclus" placeholder="donner les exclus " class="box" id="exclus" required>
    <input type="iframe" name="map" placeholder="donner map src" class="box" id="map" required>
    <input type="submit" value="Ajouter le paquet" name="Submit" class="btn">

 </form>
</section>



<section class="display-product-table">
<table>
<tbody>
<?php
   
    require_once('../controllers/DetailController.php');
    $us=new DetailController();
    $res=$us->info();
    echo "<table>
      <tr>
         
      <th>Id</th>
         <th>Nom du pays</th>
         <th> Les villes</th>
         <th>image1</th>
         <th>Image2</th>
         <th>Image3</th>
         <th>Les informations</th>
         <th>Prix</th>
         <th>les 1er jours</th>
         <th>Plan1</th>
         <th>les 2eme jours</th>
         <th>Plan2</th>
         <th>les 3eme jours</th>
         <th>Plan3</th>
         <th>inclus</th>
         <th>exclus</th>
         <th>map</th>
         <th> Action</th>
      </tr>";
      if (is_array($res) || is_object($res)){
         foreach ($res as $row)
         {
            echo "<tr>";
            echo "<td>$row[id]</td>";
            echo "<td>$row[pays]</td>";
            echo "<td>$row[ville]</td>";
            echo '<td><img src="uploaded_img/' . $row['image0'] . '" height="100" alt=""></td>';
            echo '<td><img src="uploaded_img/' . $row['image1'] . '" height="100" alt=""></td>';
            echo '<td><img src="uploaded_img/' . $row['image2'] . '" height="100" alt=""></td>';
            echo "<td>$row[info]</td>";
            echo "<td>$" . $row['price'] . "</td>";
            echo "<td>$row[jour]</td>";
            echo "<td>$row[plan]</td>";
            echo "<td>$row[jour1]</td>";
            echo "<td>$row[plan1]</td>";
            echo "<td>$row[jour2]</td>";
            echo "<td>$row[plan2]</td>";
            echo "<td>$row[inclus]</td>";
            echo "<td>$row[exclus]</td>";
            echo "<td>$row[map]</td>";
           
           
            echo "<td><a href='delete1.php?id_detail=$row[id_detail]' class='delete' onclick='return confirm(\"Voulez-vous vraiment supprimer cet enregistrement ?\")'><i class='fas fa-trash'></i> Supprimer</a>";
            echo "<a href='detail_view.php?edit=$row[id_detail]' class='option'><i class='fas fa-edit'></i> Mise à jour</a></td>";
            echo "</tr>";
         
      }}else{
         echo "<div class='empty'>Pas du plan</div>";
      };

      echo "</table>";
         

         
      ?>
      </tbody>
      </table>
      </section>

      <?php
require_once('../controllers/DetailController.php');
$detailtCtr=new DetailController();
if(isset($_GET['edit'])){
    $res=$detailtCtr->getDetail($_GET['edit']);
?>

<section class="edit-form-container">
    <form name='f1' method='post' action='update_detail.php' enctype="multipart/form-data">
    <img src="uploaded_img/<?php echo $res['image0']; ?>" height="200" alt="">
        <input type="hidden" class="box" name="id_detail" value="<?php echo $res['id_detail'] ?>">
        <input type="text" class="box" name="pays" value="<?php echo $res['pays'] ?>">
        <input type="text" class="box" name="ville" value="<?php echo $res['ville'] ?>">
        <input type="text" class="box" name="price" value="<?php echo $res['price'] ?>">
        <input type="file" class="box" name="image0" accept="image/png, image/jpg, image/jpeg">
        <input type="submit" value="mettre à jour le produit" name="update_product" class="btn-update">
        <input type="reset" value="Annuler" id="close-edit" class="btn-Annuler">
    </form>
</section>
<?php } ?>


 
   <script>document.querySelector('.edit-form-container').style.display = 'flex';</script>

   <script>
   document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'detail_view.php';
};
  </script>



</section>





      




</body>

</html>