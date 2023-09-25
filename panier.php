<?php 
        
        include('functions/userfunctions.php');
        include('includes/header.php');
        include('includes/navbar.php');
        include('authenticate.php');
?>
    <link rel="stylesheet" href="assets/css/style.css">
<br><br><br><br><br><br><br><div class="py-5">
        <div class="container">
            <div class="">

            
                <div class="row ">
                        <div class="col-md-12">

                        <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <h6>Produit</h6>
                                    </div>
                                    <div class="col-md-2">
                                        
                                    </div>
                                    <div class="col-md-2">
                                        <h6>Prix</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6>Quantité</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6>Action</h6>
                                    </div>
                                </div>
                </div>
                    <div id="mycart">
                         <?php $items = getCartItem();
                            foreach($items as $citem)
                            {?>
                            <div class="card product_data shadow-sm mb-2">

                            
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="uploads/<?= $citem['image1'];?>" alt="" width="80px">
                                    </div>
                                    <div class="col-md-2">
                                        <h4><?= $citem['nom'];?></h4>
                                    </div>
                                    <div class="col-md-2">
                                    <h4><?= $citem['prix'];?></h4>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hidden" class="prodId" value ="<?= $citem['prod_id'];?>">
                                         <div class="input-group mb-3" style="width:130px">
                                            <button class="input-group-text decrement-btn updateQty">-</button>
                                            <input type="text" class="form-control text-center input-qty" value="<?= $citem['prod_qty'];?>" disabled>
                                            <button class="input-group-text increment-btn updateQty">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-sm deleteItem" value = "<?= $citem['cid'];?>"> retirer</button>
                                    </div>
                                </div>
                                </div>

                            <?php
                                
                            }
                         ?>
                         </div>
                     </div>
                </div>
        </div>
</div>



 <?php 
        include('includes/footer.php');
?>