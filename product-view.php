
<?php
     include('functions/userfunctions.php');
     include('includes/header.php');
     include('includes/navbar.php');
     if(isset($_GET['product']))
     {
        $product = $_GET['product'];
        $pr_data =  getById("produit",$product);
        $product = mysqli_fetch_array($pr_data);

        if($product)
        {
            ?>
            <style>
                .imgr{
                    width: auto; 
                    max-height: 500px;
                    max-width: 100%;
                    height:auto; 
                }
                                /* Désactiver le défilement automatique uniquement pour les diapositives vidéo */
                .carousel-inner .video-slide {
                    animation: none !important;
                }

            </style>
    <link rel="stylesheet" href="assets/css/style.css">

            <br><br><br><br><br><div class="container product_data mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <?php 
                            $imgs  = array('');
                        ?>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="uploads/<?=$product['image1'];?>" class="d-block  imgr" alt="Image 1" >
                            </div>
                            <div class="carousel-item">
                                <img src="uploads/<?=$product['image2'];?>" class="d-block w-100 imgr" alt="Image 2"  >
                            </div>
                            <div class="carousel-item">
                                <img src="uploads/<?=$product['image3'];?>" class="d-block w-100 imgr" alt="Image 3"  >
                            </div>
                            <div class="carousel-item">
                                <img src="uploads/<?=$product['image4'];?>" class="d-block w-100 imgr" alt="Image 4"  >
                            </div>
                            <div class="carousel-item">
                                <img src="uploads/<?=$product['image5'];?>" class="d-block w-100 imgr" alt="Image 5" >
                            </div>
                            <div class="carousel-item video-slide">
                                <video autoplay controls  src="uploads/<?=$product['video'];?>" class="d-block w-100 imgr" alt="Image 5" >
                            </div>
                            </div>
                            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Precedent</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                            </a> -->
                        </div><br>
                       
                    </div>
                    <div class="col-md-6">
                        <h4><?=$product['nom'];?></h4>
                        <hr>
                        <p><?=$product['description'];?></p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5><?=$product['prix'];?> FCFA</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-3" style="width:130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" class="form-control text-center input-qty" value="1" disabled>
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button class="btn btn-primary px-4 addToCartBtn fa fa-shopping-cart" value ="<?=$product['id'];?>">
                              Ajouter</button>
                            </div>
                            <div class="col-md-6">
                            <?php
                                $lienActuel = "http";
                                if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
                                    $lienActuel .= "s";
                                }
                                $lienActuel .= "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
                                
                                
                                
                                $numeroWhatsApp = "+22790299093"; // Numéro de téléphone WhatsApp
                                $messageWhatsApp = "Bonjour, j'ai vu ce produit sur sahel store : $lienActuel"; // Message à envoyer

                                // Échapper le numéro de téléphone et le message pour les intégrer dans l'URL
                                $numeroWhatsAppEncoded = urlencode($numeroWhatsApp);
                                $messageWhatsAppEncoded = urlencode($messageWhatsApp);

                                // Construire le lien WhatsApp
                                $lienWhatsApp = "https://wa.me/$numeroWhatsAppEncoded/?text=$messageWhatsAppEncoded";
                                ?>

                                <!-- Lien vers WhatsApp -->
                                <a class="btn btn-primary px-4 fab fa-whatsapp" href="<?php echo $lienWhatsApp; ?>" class="fas fa-message"> Discuter</a>
                               </div>

                        
                    </div>
                </div>
                 
            </div>
            <?php
        }
        else
        {
            echo 'pas de produit';
        }

     }
     else
     {
        echo 'quelque chose s est mal passé';
     }

     include('includes/footer.php');
?>

