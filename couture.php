<?php
include('functions/userfunctions.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home " id="home">

    <div class="image" data-aos="fade-down">
        <img src="https://cdn.vox-cdn.com/thumbor/8hZcUxUOBb4GV1JiDsz1USpT29w=/385x352:1561x1061/1200x800/filters:focal(831x620:1137x926)/cdn.vox-cdn.com/uploads/chorus_image/image/70609268/Burger_King_Plant_based_Double_Cheeezeburger.0.jpg" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3>Most Tasty Burger For You</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo eius inventore reprehenderit alias eos facilis, ipsa est asperiores repellendus!</p>
        <a href="#" class="btn">explore now</a>
    </div>

</section>

<!-- home section ends -->

<!-- filter form section starts  -->



<!-- filter form section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> Sahel <span>Couture</span> </h1>

    <div class="box-container">

        <?php 
                    $recent = getBoutiqueAll("couture");
                    if(mysqli_num_rows($recent))
                    {
                        foreach( $recent as $item)
                        {?>
                        <div class="box" data-aos="fade-up">
                        <a href="product-view.php?product=<?=$item['id'];?>">
                            <div class="image">
                                <img src="uploads/<?=$item['image1'];?>" alt="">
                                <h3> <i class="fas fa-utensils"></i> <?=$item['nom'];?> </h3>
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


<?php 
include 'includes/footer.php'
?>