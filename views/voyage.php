
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="v.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>

 <body>
  <header>
    
    <img src="4.jpg" class="banner">
    <a href="#" class="logo">Travel</a>
    <div class="toggle"></div>
    <nav>
      <ul>
        <li><a href="#A propos">A propos</a></li>
        <li><a href="#discover">Découvrir</a></li>
        <li><a href="#Paquets">Paquets</a></li>
        <li><a href="#Critiques">Critiques</a></li>
        <li><a href="#Contact">Contact</a></li>
        <!----<li> <a href="inscit.html" class="button">Connecter</a></li>-->
        <li> <a href="inscit.php"><i class="fa-solid fa-user"></i> Connecter</a></li>
        
        
      </ul>
    </nav>
     
        
        
  </header>
 
  
 <main>
   <!---- a propos section debut -->
  <section class="A propos" id="A propos">
    <div class="container">
      <div class="about-content grid">
          <div class="about-left">
              <img src="travel1.png" alt="">
          </div>
          <div class="about-right">
            <div class="title">
                <h2>à propos Travel</h2>
            </div>
            <p class="lead">En investissant dans la technologie qui permet d'éliminer les frictions du voyage, Travel met en relation de manière transparente des millions de voyageurs avec des expériences mémorables.</p>
            <a href="#discover" class="btn-down">
              <i class="fas fa-chevron-down"></i>
            </a>
          </div>
      </div>
      
      
    </div>
    <script>
      window.addEventListener("scroll",function(){
          const header = document.querySelector('header');
          header.classList.toggle('sticky', window.scrollY > 0);
      });
      const navigation = document.querySelector('nav');
      document.querySelector(' .toggle').onclick = function(){
       this.classList.toggle('active');
      navigation.classList.toggle('active');
      }
    </script>
    
  </section>
  <!---- a propos section fin -->




 


  <!---- discover section debut -->
  <section class="discover" id="discover">
    
    <div class="discover_container container grid"> 
      <div class="title">
        <h6>Découvrir</h6>
      </div>
     <div class="discover_content ">
      <div class="discover_data">
       <h5 class="exp_number">10</h5>
       <span class="exp_descrip">Année<br>d'expérience</span>
      </div>

      <div class="discover_data">
        <h5 class="exp_number">50</h5>
        <span class="exp_descrip">Visites<br>complètes</span>
       </div>

       <div class="discover_data grid">
        <h5 class="exp_number">520+</h5>
        <span class="exp_descrip">Destination<br>touristique</span>
       </div>
      </div>
      
      <div class="video-content grid">
        <video id="video-file">
          <source src="video.mp4" type="video/mp4">
        </video>
        <button class="button button--flex video__button" id="video-button">
          <i class="fa-sharp fa-solid fa-music video__button-icon" id="video-icon"></i>
        


      </div>

      

      <!----<div class="discover_img grid">
        <div class="discover_overlay">
          <img src="67.png" alt="" class="discover_img-one">
        </div>

        <div class="discover_overlay">
          <img src="t3.png" alt="" class="discover_img-two">
        </div>--> 

    </div>
      

    
  </section>
 <!---- discover section fin --> 


  <!---- video section debut  
  <section class="video section" id="discover">
    <div class="title">
      <h6>Visite/vidéo</h6>
    </div>

    <div class="video-container container">
      <p class="video-des">
        Découvrez avec notre vidéo des plus beaux et des plus agréables lieux pour vous et votre famille.
      </p>
      <div class="video-content">
        <video id="video-file">
          <source src="vid3.mp4" type="video/mp4">
        </video>
        <button class="button button--flex video__button" id="video-button">
          <i class="fa-pause video__button-icon" id="video-icon"></i>
        </button>


      </div>
    </div>
  </section> -->
  <!---- video section fin --> 
  <script>
    const videoFile = document.getElementById('video-file'),
    videoButton = document.getElementById('video-button'),
    videoIcon = document.getElementById('video-icon')

    function playPause(){
      if(videoFile.paused){
        videoFile.play()
      }else{
        videoFile.pause()
      }
    }
    videoButton.addEventListener('click',playPause)

  </script>


  <!---- acceuil section debut
  <section class="Acceuil" id="Acceuil">
   
    <div class="content">
      <h3>Voyage,Découverte,Aventure</h3>
      <p>Découvrez les nouveaux lieux avec nous</p>
    </div>

    <div class="controls">
      <span class="vid-btn active" data-src="vid1.mp4"></span>
      <span class="vid-btn" data-src="vid2.mp4"></span>
      <span class="vid-btn" data-src="vid3.mp4"></span>
    </div>
    <div class="video-container">
      <video src="vid1.mp4" id="video-slider" loop autoplay muted></video>
    </div>
  </section> -->
  <!---- acceuil section fin -->

  
  <!---- paquets section debut -->
  <section class="pakages" id="Paquets">
    <div class="title">
      <h3>Les paquets</h3>
    </div>
    <div class="box-container">
    <?php
     require_once('../controllers/PaquetController.php');
     $us=new PaquetController();
     $res=$us->liste();
      
     if (is_array($res) || is_object($res)) {
      foreach ($res as $row) {

        echo '<div class="box">';
        echo '<form action="" method="post">';
      
          echo '<img src="uploaded_img/' . $row['image'] . '" alt="">';
          echo '<div class="content">';
              echo '<h4><i class="fas fa-map-marker-alt"></i> ' . $row['name'] . '</h4>';
              echo '<p>' . $row['descr'] . '</p>';
              echo '<div class="price">$' . $row['price'] . '</div>';
              echo '<input type="hidden" name="name" value="' . $row['name'] . '">';
              echo '<input type="hidden" name="descr" value="' . $row['descr'] . '">';
              echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
              echo '<input type="hidden" name="image" value="' . $row['image'] . '">';
              echo "<a href='detail_page.php?id=$row[id]' class='btn'>Réserver</a>";
          echo '</div>';
        echo '</form>';
        echo '</div>';
    }
}
?>
    </div>
    <button class="load-more">Load More</button>
    <script>
      $(document).ready(function(){
        $(".box").slice(0,3).fadeIn();
        $(".load-more").click(function(){
          $(".box").slice(0, 12).fadeIn();
          $(this).fadeOut();
        });
  
      });
    </script>
  
    </div>
  </section>
   <!---- paquets section fin -->


   <!---- critique section debut -->
  <section class="critique" id="Critiques">
    <div class="title">
      <h6>critiques</h6>
    </div>
    <div class="critique-slider">
      <div class="wrapper">
        
          <div class="box">
            <img src="john.png" alt="">
            <h4>john deo</h4>
            <p>Pour l'organisation de notre voyage de noces, nous avons fait confiance à Travel et nous n'avons pas été déçu.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
  
        <div class="slider">
          <div class="box">
            <img src="sara.png" alt="">
            <h4>sara12</h4>
            <p>Preparation simple et efficace, service 24H/24 vraiment confortable. Esprit Libre Voyage porte bien sont nom..</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
        <div class="slider">
          <div class="box">
            <img src="adam.png" alt="">
            <h4>adam jeo</h4>
            <p>Organisation optimisée et parfaite pour nous permettre un séjour en toute décontraction et une jolie découverte.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="slider">
          <div class="box">
            <img src="selena.png" alt="">
            <h4>selena7</h4>
            <p>Excellent séjour en Tunisie , Merci pour vos offres et professionnalisme.À très bientôt pour un futur voyage .</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </section>

   <!---- critique section fin -->
 
   
   <!---- footer section -->
   <section class="footer" id="Contact">
    <div class="box-container">
      <div class="box">
        <h5>Travel</h5>
        <p>Travel vous choisissez la destination, nous vous offrons l'expérience</p>
      </div>

      <div class="box">
        <h5>Emplacement de la succursale</h5>
        <a href="#">Tunisia</a>
        <a href="#">USA</a>
        <a href="#">Japan</a>
        <a href="#">France</a>
      </div>

      <div class="box">
        <h5>Liens Rapides</h5>
        <a href="#A propos"><i class="fas fa-angle-right"></i>A propos</a>
        <a href="#discover"><i class="fas fa-angle-right"></i>Découvrir</a>
        <a href="#Paquets"><i class="fas fa-angle-right"></i>Paquets</a>
        <a href="#Critiques"><i class="fas fa-angle-right"></i>Critiques</a>
      </div>

      <div class="box">
        <h5>Info Contact</h5>
        <a href="#"><i class="fas fa-phone"></i>+216-98-786-321</a>
        <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"><i class="fas fa-envelope"></i>Travel@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Nabeul,Tunisia-8000</a>
      </div>

      
    </div>
    
   </section>
  
   






 </main>


  
  <script src="sc.js"></script>
 </body>

</html>








 <div class="collapsible">
          <form [formGroup]="projectForm" >
            <div formArrayName="projectList">
              <div *ngFor="let project of projectListArray().controls; let i = index">
                <div [formGroupName]="i" class="input-box">
                  <input type="checkbox" id="collapsible-head">
                  <label for="collapsible-head" class="collapsible-header" formControlName="Titre">
                    Théme
                   <button type="button" (click)="addProject()" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
                   <button *ngIf="projectListArray().length > 1" class="btn btn-sm btn-danger ms-2" (click)="removeProject(i)"><i class="fas fa-trash"></i></button>
                  </label>

                <div class="collapsible-text" for="collapsible-head" class="collapsible-header" formControlName="info">
                    <h2>Théme1</h2>
                    <p>  bfdfbdhbjhsfbkjfbjjzdkjnbfbr</p>
                </div>
              </div>
              </div>
            </div>
         </form>
        </div>