<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    <div class="container" >
               
                <br>
                <br>
                <br>
        <div class=""> 
            <div class="card">
                
                <div class="card-header">
                    Produits
                </div>
                <div class="">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th> 
                               <!-- <th>Description</th>-->
                                <th>Prix</th>
                                <th>Categorie</th>
                                <th>Image</th>
                                <th>Boutique</th>
                                <th>Editer</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $category = getAll("produit");
                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?=$item['id'];?></td>
                                            <td><?=$item['nom'];?></td>
                                            <!--<td><?=$item['description'];?></td> -->
                                            <td><?=$item['prix'];?> FCFA</td>
                                            <td><?php
                                                $cat = getById("categorie",$item['id']);
                                                if(mysqli_num_rows($cat) > 0)
                                                {
                                                    
                                                   foreach($cat as $it)
                                                   {
                                                    echo $it['nom'];
                                                   }
                                                }
                                            ?></td>
                                            <td>
                                                <img src="../uploads/<?=$item['image1'];?> " height="50px" width="50px"/></td>
                                            <td><?php
                                                    if($item['boutique']== 1)
                                                    {
                                                        echo 'sahel meuble';
                                                    }
                                                    if($item['boutique']== 2)
                                                    {
                                                        echo 'sahel car';
                                                    }if($item['boutique']== 3)
                                                    {
                                                        echo 'sahel immobilier';
                                                    }
                                                    if($item['boutique']== 4)
                                                    {
                                                        echo 'sahel couture';
                                                    }
                                                    if($item['boutique']== 0)
                                                    {
                                                        echo 'sahel tchangi';
                                                    }
                                                ?></td>
                                            <td><a href="editproduct.php?id=<?=$item['id'];?>" class="btn btn-primary">Editer</a></td>
                                            <td><button type="submit" name="del-prod" class="btn btn-danger">Supprimer</button></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else{
                                    echo 'aucun produit trouvé';
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
<?php
    include('includes/footer.php');
?>