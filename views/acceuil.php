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
 <div class="cardBox">
    <div class="card">
        <div>
            <div class="cardName">Nombres des clients:</div>
            <div class="numbers">
                <?php
                    require_once('../controllers/CompteController.php');
                    $compteController = new CompteController();
                    $count = $compteController->count();
                    echo '<h1>'.$count.'</h1>';
                ?>
            </div>
        </div>

                    <div class="iconBx">
                    <ion-icon name="id-card-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        
                        <div class="numbers">
                        <?php
                    require_once('../controllers/ClientController.php');
                    $clientController = new clientController();
                    $count = $clientController->count();
                    echo '<h1>'.$count.'</h1>';
                ?>


                        </div>
                        <div class="cardName">Nombres des réservations:</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="bag-check-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                   
                        <div class="cardName">Nombres des paquets de voyage:</div>
                        <div class="numbers">
                        <?php
                    require_once('../controllers/PaquetController.php');
                    $paquetController = new PaquetController();
                    $count = $paquetController->count();
                    echo '<h1>'.$count.'</h1>';
                ?>
                        



                        </div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="images-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                    require_once('../controllers/DetailController.php');
                    $detailController = new DetailController();
                    $count = $detailController->count();
                    echo '<h1>'.$count.'</h1>';
                ?>
                        </div>
                        <div class="cardName">Nombres des pages de tour:</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="document-text-outline"></ion-icon>
                    </div>
                </div>

            


            </div>







 </body>

</html>