<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php 
                  if(isset($_GET['id']))
                  {
                   $id = $_GET['id'];
                   $product = getById('produit',$id);
                   if(mysqli_num_rows($product) > 0)
                   {
                        $data = mysqli_fetch_array($product);
                    ?>
                        <div class="card">
                                <div class="card-header">
                                    <h4>Editer un produit</h4>
                                </div>
                                <div class="card-body">
                                    <form action="code2.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Nom</label>
                                                <input type="text" value="<?=$data['nom'];?>" name="nom" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">description</label>
                                                <input type="text" value="<?=$data['description'];?>" name="description" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Prix</label>
                                                <input type="number" value="<?=$data['prix'];?>" name="prix" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Categorie</label>
                                                <select name="categorie"  class="form-select">
                                                    <?php 
                                                        $categpries = getAll("categorie");
                                                        if(mysqli_num_rows($categpries) > 0)
                                                        {
                                                            foreach($categpries as $item){
                                                                ?>
                                                                <option  value ="<?$item['id'];?>"><?$data['id'] == $item['id']? 'selected':''?><?=$item['nom'];?></option>
                                                            <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo 'aucune categorie';
                                                        }
                                                
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">image1</label>
                                                <input type="file" name="image1" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">image2</label>
                                                <input type="file" name="image2" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">image3</label>
                                                <input type="file" name="image3" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">image4</label>
                                                <input type="file" name="image4" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">image5</label>
                                                <input type="file" name="image5" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">video</label>
                                                <input type="file" name="video" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Boutique</label>
                                                <select name="boutique"  class="form-select">
                                                    <?php 
                                                        $categpries = getAll("boutique");
                                                        if(mysqli_num_rows($categpries) > 0)
                                                        {
                                                            foreach($categpries as $item){
                                                                ?>
                                                                <option  value ="<?$item['id'];?>"><?$data['id'] == $item['id']? 'selected':''?><?=$item['nom'];?></option>
                                                            <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo 'aucune boutique';
                                                        }
                                                
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-10">
                                                
                                            </div>
                                            <div class="col-md-5 justify-content-center">
                                                <button type="submit" name="updt-prod" class="btn btn-primary"> enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                    </div> 
                  <?php  
                   }
                   else
                   {
                           echo "produit introuvable";               
                    }
               
                }
                else
                {
                        echo "identifiant introuvable";               
                 }
                ?>
            </div>
        </div>
    </div>
  <?php   ?>