<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tour</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="toure.css">
    
  
  </head>

 <body>

    
    <?php
     require_once('../controllers/DetailController.php');
     $us=new DetailController();
     $res=$us->liste();
     //$res=$us->getDetail($_GET['id_detail']);

     //$ide ="";
     //if (isset($_GET["id_detail"]))
     //{
      //$ide = $_GET["id_detail"];
     //}
     


     if (is_array($res) || is_object($res)) {
      foreach ($res as $row) {?>

        <div class="tour-details">
        <div class="tour-title">
        <h1> <?=$row['pays']?></h1>
        <div class="row">
        <p><?=$row['ville']?></p>
        </div>
        </div>


        <div class="gallery">
        <div class="gallery-img-1"><img src="uploaded_img/<?=$row['image0'] ?>" alt=""></div>
        <div>
        <img src="uploaded_img/<?=$row['image1']?>" alt="">
        <img src="uploaded_img/<?=$row['image2']?>" alt="">
        </div>
        </div>

      

        <div class="small-details">
       <h2> Informations sur le voyage:</h2>
        <p><?=$row['info']?></p>
        <h4>$<?=$row['price']?></h4>

        </div>
       


        <hr class="line">


    
      <div class="container">
        <div class="text">Réservation</div>
        <form name="form1" method="post" class="add-product-form" action="book.php">
          <div class="user-details">
         
          
            
            <div class="input-box ">
              <span class="details">Nom et Prénom:</span>
              <input  type="text" placeholder="Donner votre nom et prénom" name="nom_prenom" id="nom_prenom" required>
            </div>
            
           <div class="input-box ">
              <span class="details">Email Address:</span>
             <input type="text" placeholder="Donner votre Email Address" name="email_tour" id="email_tour" required >
            </div>
  
            <div class="input-box">
              <span class="details">No-téléphone:</span>
              <input type="text" placeholder="Donner votre No-téléphone" name="tel_tour" id="tel_tour" required >
            </div>

            <div class="input-box ">
              <span class="details">A partir de:</span>
              <input type="date" name="date_tour" id="date_tour" required >
            </div>
  
            <div class="input-box ">
             <span class="details">Nombres de personnes:</span>
            <input type="text" placeholder="Donner le Nb de personnes" name="nb_personne" id="nb_personne" required >
            
            </div>
            </form>
  
          <div class="butt">
          <input type="submit"  name="Submit" value="Reserver" class="btn">
          
          </div>
         
          <div class="button">
 
          <button formaction="https://formsubmit.co/ae0785253a2c820a8903e22430101955">Envoyer les informations</button>
         <!-- echo '<button formaction="https://formsubmit.co/ae0785253a2c820a8903e22430101955">Envoyer les informations</button>'; -->
            </div>
  
  
          </div>
        
  
       </div>
  
       
        <h3> Le plan de la tour:</h3>

       <ul class="accordion">

        <li>
        <input type="radio" name="accordion" id="first" checked>
        <label for="first"><?=$row['jour'] ?>'</label>
        <div class="content">
        <p>
        <p><?=$row['plan']?></p>
        </p>
        </div>
         </li>

        <li>
        <input type="radio" name="accordion" id="second">
        <label for="second"><?=$row['jour1']?></label>
        <div class="content">
        <p>
        <p><?=$row['plan1']?></p>
        </p>
        </div>
        </li>

        <li>
        <input type="radio" name="accordion" id="third">
        <label for="third"><?=$row['jour2']?></label>
      <div class="content">
        <p>
        <p><?= $row['plan2']?></p>
        </p>
        </div>
        </li>

      </ul>











        

       <h3>Inclus/Exclus:</h3>
       <ul class="details-list">
       <div class="check">
       <li><i class="fa-solid fa-circle-check"></i><?=$row['inclus']?></li>
      </div>

       <div class="mark">
       <li><i class="fa-solid fa-circle-xmark"></i><?=$row['exclus']?></li>
       </div>


        <hr class="line">

       <h5>La carte de localisation:</h5>
       <div class="map">
      <iframe   src='<?=$row['map']?>' width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
       </div>
       </div>


<?php
}
}
?>
      






<!-- if (is_array($res) || is_object($res)) {
      foreach ($res as $row) {
        echo '<div class="tour-details">';
        echo '<div class="tour-title">';
        echo '<h1> ' . $row['pays'] . '</h1>';
        echo '<div class="row">';
        echo '<p>' . $row['ville'] . '</p>';
        echo '</div>';
        echo '</div>';


        echo '<div class="gallery">';
        echo '<div class="gallery-img-1"><img src="uploaded_img/' . $row['image0'] . '" alt=""></div>';
        echo '<div>';
        echo '<img src="uploaded_img/' . $row['image1'] . '" alt="">';
        echo '<img src="uploaded_img/' . $row['image2'] . '" alt="">';
        echo '</div>';
        echo '</div>';

      

        echo '<div class="small-details">';
        echo '<h2> Informations sur le voyage:</h2>';
        echo '<p>' . $row['info'] . '</p>';
        echo '<h4> ' . $row['price'] . '</h4>';
        echo '</div>';
       


       echo ' <hr class="line">';


    
      echo '<div class="container">';
        echo '<div class="text">Réservation</div>';
        echo '<form name="form1" method="post" class="add-product-form" action="booking.php">';
          echo '<div class="user-details">';
            echo '<div class="input-box ">';
              echo '<span class="details">Nom et Prénom:</span>';
              echo '<input  type="text" placeholder="Donner votre nom et prénom" name="nom_prenom" id="nom_prenom" required>';
            echo '</div>';
            
           echo '<div class="input-box ">';
              echo '<span class="details">Email Address:</span>';
             echo '<input type="text" placeholder="Donner votre Email Address" name="email_tour" id="email_tour" required >';
            echo '</div>';
  
            echo '<div class="input-box">';
              echo '<span class="details">No-téléphone:</span>';
              echo '<input type="text" placeholder="Donner votre No-téléphone" name="tel_tour" id="tel_tour" required >';
            echo '</div>';

            echo '<div class="input-box ">';
              echo '<span class="details">A partir de:</span>';
              echo '<input type="date" name="date_tour" id="date_tour" required >';
            echo '</div>';
  
            echo '<div class="input-box ">';
             echo ' <span class="details">Nombres de personnes:</span>';
            echo '<input type="text" placeholder="Donner le Nb de personnes" name="nb_personne" id="nb_personne" required >';
            
            echo '</div>';
            echo '</form>';
  
          echo '<div class="butt">';
          echo '<input type="submit"  name="Submit" value="Reserver" class="btn">';
          
          echo '</div>';
         
         echo ' <div class="button">';
          echo '<button formaction="https://formsubmit.co/ae0785253a2c820a8903e22430101955">Envoyer les informations</button>';
            echo '</div>';
  
  
          echo '</div>';
        
  
       echo '</div>';
  
       
        echo '<h3> Le plan de la tour:</h3>';

       echo '<ul class="accordion">';

        echo '<li>';
        echo '<input type="radio" name="accordion" id="first" checked>';
        echo '<label for="first">' . $row['jour'] .'</label>';
        echo '<div class="content">';
        echo '<p>';
        echo '<p>' . $row['plan'] . '</p>';
        echo '</p>';
        echo '</div>';
        echo '</li>';

        echo '<li>';
        echo '<input type="radio" name="accordion" id="second">';
        echo '<label for="second">' . $row['jour1'] .'</label>';
        echo '<div class="content">';
        echo '<p>';
        echo '<p>' . $row['plan1'] . '</p>';
        echo '</p>';
        echo '</div>';
        echo '</li>';

        echo '<li>';
        echo '<input type="radio" name="accordion" id="third">';
        echo '<label for="third">'. $row['jour2'] .'</label>';
        echo '<div class="content">';
        echo '<p>';
        echo '<p>' . $row['plan2'] . '</p>';
        echo '</p>';
        echo '</div>';
        echo '</li>';

      echo '</ul>';











        

       echo '<h3>Inclus/Exclus:</h3>';
       echo '<ul class="details-list">';
       echo '<div class="check">';
       echo '<li><i class="fa-solid fa-circle-check"></i>'. $row['inclus'] . '</li>';
       echo '</div>';

       echo '<div class="mark">';
       echo '<li><i class="fa-solid fa-circle-xmark"></i>'. $row['exclus'] .'</li>';
       echo '</div>';


       echo '  <hr class="line">';

       echo '<h5>La carte de localisation:</h5>';
       echo '<div class="map">';
       echo '<iframe   src=' . $row['map'] .  'width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
       echo '</div>';
       echo '</div>';
       echo '</div>';



      }
    }


    ?> -->








 


 
</body>

</html>