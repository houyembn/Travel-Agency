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


<?php
require_once('../controllers/PaquetController.php');
$paquetCtr=new PaquetController();
$res=$paquetCtr->getPaquet($_GET['id']);
?>


<section class="edit-form-container">
<form name = 'f1' method='post' action='update.php' enctype="multipart/form-data">
<input type = "text" name = "image" src="uploaded_img/" value = "<?php echo $res['image'] ?>" height="200" alt=""/></td>
 <input type="text" class="box" name="id" value="<?php echo $res['id'] ?>">
      <input type="text" class="box" name="name" value="<?php echo $res['name'] ?>">
      <input type="text" class="box" name="descr" value="<?php echo $res['descr'] ?>">
      <input type="text" class="box" name="price" value="<?php echo $res['price'] ?>">
      <input type="file" class="box" name="image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="mettre à jour le produit" name="update_product" class="btn-update">
      <input type="reset" value="Annuler" id="close-edit" class="btn-Annuler">
    
   </form>

 
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
