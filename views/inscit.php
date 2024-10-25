<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="inscrit.css">
    <script src="https://unpkg.com/swup@3"></script>
   
  </head>

 <body>
  <main id="swup" class="transition-fade">
   <section> 
    <div class="container">
     <div class="user signinBx">
      <div class="imgBx"><img src="hy.jpg"></div>
      <div class="formBx">
      <form method="POST" action="login.php">
          <h2>Connecter</h2>
          <input type="text" placeholder="Email Address" name="Email_connec" id="Email_connec ">
          <input type="password" placeholder="Mot de passe" name="passe_connec" id="passe_connec">
          <input type="submit" value="Connecter" name="send">

          <?php if (isset($_GET['error'])) { ?>
     	       	<p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <p class="connecter">Vous n'avez pas encore de compte? <a href="compte.php" onclick="toggleForm();">S'inscrire</a></p>
        </form>
      </div>
      </div>
     </div>
   </section>
  </main>

  <script>
  const swup = new Swup();
  </script>

   


  
  </body>

</html>





