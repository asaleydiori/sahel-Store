<?php
include('functions/userfunctions.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image" data-aos="fade-down">
        <img height="200" width="200" src="data:image/jpeg;base64,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" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3>Bienvenu chez sahel store</h3>
        <p>Faites vous plaisirs avec nos articles divers et de tres bonne qualite!</p>
        <a href="#" class="btn">explore now</a>
    </div>

</section>

<!-- home section ends -->

<!-- filter form section starts  -->



<!-- filter form section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> Recement <span>Ajouter</span> </h1>

    <div class="box-container">

        <?php 
                    $recent = getrecent();
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-clock"></i> <?=$item['nom'];?> </h3>
                            </div></a>
                            <div class="content">
                                <div class="price"> <?=$item['prix'];?> FCFA<span></span> </div>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$item['description'];?></p>
                            
                            </div>
                        </div>
                        
                     <?php
                    }
                    }
                    ?>
      

    </div>

</section>
<section class="packages" id="packages">

    <h1 class="heading"> Sahel <span>Meuble</span> </h1>

    <div class="box-container">

        <?php 
                    $recent =getBoutique("meuble");
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-chair"></i> <?=$item['nom'];?> </h3>
                            </div></a>
                            <div class="content">
                                <div class="price"> <?=$item['prix'];?> FCFA<span></span> </div>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$item['description'];?></p>
                            
                            </div>
                        </div>
                        
                     <?php
                    }
                    }
                    ?>
      
       
       

    </div>

</section>
<section class="packages" id="packages">

    <h1 class="heading"> Sahel <span>Couture</span> </h1>

    <div class="box-container">

        <?php 
                    $recent = getBoutique("couture");
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-tshirt"></i> <?=$item['nom'];?> </h3>
                            </div></a>
                            <div class="content">
                                <div class="price"> <?=$item['prix'];?> FCFA<span></span> </div>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$item['description'];?></p>
                            
                            </div>
                        </div>
                        
                     <?php
                    }
                    }
                    ?>
      
       
     

    </div>

</section>
<section class="packages" id="packages">

    <h1 class="heading"> Sahel <span>Car</span> </h1>

    <div class="box-container">

        <?php 
                    $recent = getBoutique("car");
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-car"></i> <?=$item['nom'];?> </h3>
                            </div></a>
                            <div class="content">
                                <div class="price"> <?=$item['prix'];?> FCFA<span></span> </div>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$item['description'];?></p>
                            
                            </div>
                        </div>
                        
                     <?php
                    }
                    }
                    ?>
      
     

    </div>

</section>
<section class="packages" id="packages">

    <h1 class="heading"> Sahel <span>Immobilier</span> </h1>

    <div class="box-container">

        <?php 
                    $recent = getBoutique("immobilier");
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-home"></i> <?=$item['nom'];?> </h3>
                            </div></a>
                            <div class="content">
                                <div class="price"> <?=$item['prix'];?> FCFA<span></span> </div>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$item['description'];?></p>
                            
                            </div>
                        </div>
                        
                     <?php
                    }
                    }
                    ?>
      
       
       

    </div>

</section>
<section class="packages" id="packages">

    <h1 class="heading"> Sahel <span>Tchangi</span> </h1>

    <div class="box-container">

        <?php 
                    $recent = getBoutique("tchangi");
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-money-bill"></i> <?=$item['nom'];?> </h3>
                            </div></a>
                            <div class="content">
                                <div class="price"> <?=$item['prix'];?> FCFA<span></span> </div>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$item['description'];?></p>
                            
                            </div>
                        </div>
                        
                     <?php
                    }
                    }
                    ?>
      
       
 

    </div>

</section>
<!-- packages section ends -->
 

<!-- pricing section starts  -->



<!-- pricing section ends -->

<!-- review section starts  -->
<!-- 
<section class="review" id="review">

    <h1 class="heading"> Les impressions de nos <span>Client</span> </h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

      

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Laisser nous</span> un commentaire </h1>

    <form action="" data-aos="zoom">

        <div class="inputBox">
            <input type="text" placeholder="name" data-aos="fade-up">
            <input type="email" placeholder="email" data-aos="fade-up">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number" data-aos="fade-up">
            <input type="text" placeholder="subject" data-aos="fade-up">
        </div>

        <textarea name="" placeholder="your message" id="" cols="30" rows="10" data-aos="fade-up"></textarea>
        
        <input type="submit" value="send message" class="btn">

    </form>

</section> -->

<!-- contact section ends -->

<!-- blog section ends -->

<!-- footer section starts  -->


<?php 
include 'includes/footer.php'
?>