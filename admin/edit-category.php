<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php 
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                            $category = getById("categorie",$id);
                            if(mysqli_num_rows($category) > 0)
                            {
                                $data = mysqli_fetch_array($category);

                            
                        ?>
                    
                
                <div class="card">
                    <div class="card-header">
                        <h4>Editer une Categorie</h4>
                    </div>
                    <div class="card-body">
                        <form action="../code.php" method="POST" class="form">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Nom de la categorie</label>
                                    <input type="text" value=<?=$data['nom'] ?> name="nom" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Nom de la boutique</label>
                                    <select name="boutique" value=<?=$data['boutique'] ?>  class="form-select">
                                        <?php 
                                            $categpries = getAll("boutique");
                                            if(mysqli_num_rows($categpries) > 0)
                                            {
                                                foreach($categpries as $item){
                                                    ?>
                                                    <option  value ="<?$item['id'];?>"><?=$item['nom'];?></option>
                                                <?php
                                                }
                                            }
                                            else
                                            {
                                                echo 'aucune categorie trouvé';
                                            }
                                           
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-10">
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-10">
                                    <button type="submit" name="updt-cat" class="btn btn-primary"> enregistrer</button>
                                </div>
                                        </form>
                    </div>
                </div>
                <?php
                            }
                            else{
                                echo 'catgorie pas trouvé';
                            }
                    }
                    else
                    {
                        echo 'erreur';
                    }
                        ?>
            </div>
        </div>
    </div>
  <?php   ?>