<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Compte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="inscrit.css">
    <script src="https://unpkg.com/swup@3"></script>
   
  </head>

 <body>
 <main id="swup" class="transition-fade">
   <section class="compte" id="compte">
   <div class="container" >
        <div class="user signinBx">
          
         <div class="formBx">
           <form action="inscription.php" method="post" class="inscrit_form" >
             <h2>Créer un compte</h2>

             <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      id="name"
                      placeholder="Nom"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name"
                      id="name" 
                      placeholder="Nom"><br>
          <?php }?>

         
          <?php if (isset($_GET['Email_connec'])) { ?>
               <input type="text" 
                      name="Email_connec" 
                      id="Email_connec" 
                      placeholder="mail Adresse"
                      value="<?php echo $_GET['Email_connec']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="Email_connec"
                      id="Email_connec"  
                      placeholder="mail Adresse"><br>
          <?php }?>
             
             <input type="password" placeholder="Mot de passe" name="passe_connec" id="passe_connec">
             <input type="submit" value="S'inscrire">

          <?php if (isset($_GET['error'])) { ?>
     	       	<p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
     	       	<p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

             <p class="connecter">Vous avez déjà un compte? <a href="inscit.php" onclick="toggleForm();">Connecter</a></p>
           </form>
         </div>
         <div class="imgBx"><img src="p.jpg"></div>
      </div>
      

     </div>
   </section>
  </main>

  <script>
  const swup = new Swup();
  </script>
 
  </body>

</html>