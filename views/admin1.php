<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin1.css">
 </head>

 <body>

    <!-- =============== Navigation ================ -->
    <header class="header">
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="earth-outline"></ion-icon>
                        </span>
                        <span class="title">Travel</span>
                    </a>
                </li>

                <li>
                    <a href="acceuil.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Acceuil</span>
                    </a>
                </li>

                <li>
                    <a href="costomer.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Clients</span>
                    </a>
                </li>

                <li>
                    <a href="paquet_view.php">
                        <span class="icon">
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </span>
                        <span class="title">Paquets</span>
                    </a>
                </li>

                <li>
                    <a href="detail_view.php">
                        <span class="icon">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="title">Tour</span>
                    </a>
                </li>

               

                <li>
                    <a href="Disconnecter.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Deconnextion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </header>


    <main>
       
      
     <section class="Acceuil" id="Acceuil">
        <div class="main">
            
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="user">
                    <img src="aya.png" alt="">
                </div>
            </div>

         <!--
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Ajouterunpaquet</h3>
                <input type="text" name="p_name" placeholder="donner le nom du pays" class="box" required>
                <input type="textarea" name="p_name" placeholder="donner la description du pays" class="box" required>
                <input type="number" name="p_price" min="0" placeholder="donner le prix" class="box" required>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="Ajouter le paquet" name="add_product" class="btn">
                </form>


            </div>

        </div> 
            
     </section>
         
        

      



            
        
   
 </main>-->
    <!-- =========== Scripts =========  -->
    <script src="admin.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 </body>

</html>