<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin.css">
 </head>

 <body>


<?php include 'admin1.php' ;?>
<section class="paquet">
    <h3>Ajouter un nouveau paquet</h3>

    <form name="form1" method="post" class="add-product-form" action="ajout_paquet.php">

      
    <input type="text" name="name" placeholder="donner le nom du pays" id="name" class="box" required>
    <input type="text" name="descr" placeholder="donner la description du pays" id="descr" class="box" required>
    <input type="text" name="price" placeholder="donner le prix" class="box" id="price" required>
    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" id="image" required>
    <input type="submit" value="Ajouter le paquet" name="Submit" class="btn">

 </form>
</section>


<section class="display-product-table">
<table>
<tbody>
<?php
   
    require_once('../controllers/PaquetController.php');
    $us=new PaquetController();
    $res=$us->liste();
    echo "<table>
      <tr>
         <th>Image</t>
         <th>Nom du pays</th>
         <th> Description</th>
         <th>Prix</th>
         <th> Action</th>
         <th> Tour</th>
      </tr>";
      if (is_array($res) || is_object($res)){
         foreach ($res as $row)
         {
            echo "<tr>";
            echo '<td><img src="uploaded_img/' . $row['image'] . '" height="100" alt=""></td>';
            echo "<td>$row[name]</td>";
            echo "<td>$row[descr]</td>";
            echo "<td>$" . $row['price'] . "</td>";

           
          
            echo "<td><a href='delete.php?id=$row[id]' class='delete' onclick='return confirm(\"Voulez-vous vraiment supprimer cet enregistrement ?\")'><i class='fas fa-trash'></i> Supprimer</a>";
            echo "<a href='paquet_view.php?edit=$row[id]' class='option'><i class='fas fa-edit'></i> Mise à jour</a></td>";
            echo "<td><a href='detail_view.php?id_tour=$row[id]' class='plane'><i class='fas fa-plane'></i>Créer une page tour</a></td>";
           
            // echo "<td><a href='delete.php?id=$row[id]' class='delete' onclick='return confirm(\"Voulez-vous vraiment supprimer cet enregistrement ?\")'><i class='fas fa-trash'></i> Supprimer</a></td>";
            // echo "<td><a href='upd.php?id=$row[id]' class='option'><i class='fas fa-edit'></i> Mise à jour</a></td>";
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
require_once('../controllers/PaquetController.php');
$paquetCtr=new PaquetController();
if(isset($_GET['edit'])){
    $res=$paquetCtr->getPaquet($_GET['edit']);
?>

<section class="edit-form-container">
      <form name='f1' method='post' action='update.php' enctype="multipart/form-data">
       <input type="hidden" name = "image" src="uploaded_img/" value = "<?php echo $res['image'] ?>" height="200" alt=""/></td>
      <img src="uploaded_img/<?php echo $res['image']; ?>" height="200" alt=""> 
      <input type="hidden" class="box" name="id" value="<?php echo $res['id'] ?>">
      <input type="text" class="box" name="name" value="<?php echo $res['name'] ?>">
      <input type="text" class="box" name="descr" value="<?php echo $res['descr'] ?>">
      <input type="text" class="box" name="price" value="<?php echo $res['price'] ?>">
      <input type="file" class="box" name="image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="mettre à jour le produit" name="update_product" class="btn-update">
      <input type="reset" value="Annuler" id="close-edit" class="btn-Annuler">
    </form> 
</section>
<?php } ?>


 
   <script>document.querySelector('.edit-form-container').style.display = 'flex';</script>

   <script>
   document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'paquet_view.php';
};
  </script>



</section>



</body>

</html>