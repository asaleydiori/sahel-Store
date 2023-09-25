<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter une Categorie</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data" class="form">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Nom de la categorie</label>
                                    <input type="text" name="nom" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Nom de la categorie</label>
                                    <input type="text" name="nom" class="form-control"/>
                                </div>
                                <!-- <div class="col-md-5">
                                    <label for="">Nom de la boutique</label>
                                    <select name="boutique"  class="form-select">
                                        <?php 
                                            $categpries = getAll("boutique");
                                            if(mysqli_num_rows($categpries) > 0)
                                            {
                                                foreach($categpries as $item){
                                                    ?>
                                                    <option name="boutique"  value ="<?$item['id'];?>"><?=$item['nom'];?></option>
                                                <?php
                                                }
                                            }
                                            else
                                            {
                                                echo 'aucune categorie';
                                            }
                                           
                                        ?>
                                    </select>
                                </div> -->
                                <div class="col-md-10">
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-10">
                                    <button type="submit" name="add-cat" class="btn btn-primary"> enregistrer</button>
                                </div>
                                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php   ?>