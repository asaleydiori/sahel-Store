<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    
    <div class="container" align="center">
        <div class="col-md-12"> 
            <div class="card">
                <div class="card-header">
                    Categories
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Boutique</th>
                                <th>Editer</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $category = getAll("categorie");
                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?=$item['id'];?></td>
                                            <td><?=$item['nom'];?></td>
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
                                                    if($item['boutique']== 5)
                                                    {
                                                        echo 'sahel tchangi';
                                                    }
                                                ?></td>
                                            <td>
                                                <a href="edit-category.php?id=<?=$item['id'];?>" class="btn btn-primary">Editer</a>
                                               
                                            </td>
                                            <td>
                                            <form action="code.php" method="POST">
                                                    <input type="hidden" name="c_id" value="<?=$item['id'];?>">
                                                    <button type="submit" name="del-cat" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else{
                                    echo 'aucune categorie trouvé';
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