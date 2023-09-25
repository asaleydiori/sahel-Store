<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    
    <div class="container" align="center">
        <div class="col"> 
            <div class="card">
                <div class="card-header">
                    Commandes
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Produit</th>
                                <th>Quantite</th>
                                <th>Prix Unitaire</th>
                                <th>Prix</th>
                                <th>Valider</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $category = getVlPanier();
                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?=$item['nom'];?></td>
                                            <td><?=$item['telephone'];?></td>
                                            <td><?=$item['prnom'];?></td>
                                            <td><?=$item['prod_qty'];?></td>
                                            <td><?=$item['prix'];?></td>
                                            <td><?=$item['prix'];?></td>
                                            
                                            <td>
                                            <form action="code.php" method="POST">
                                                    <input type="hidden" name="c_id" value="<?=$item['idp'];?>">
                                                    <button type="submit" name="val-pan" class="btn btn-danger">Valider</button>
                                                </form> 
                                            </td>
                                            <td>
                                            <form action="code.php" method="POST">
                                                    <input type="hidden" name="c_id" value="<?=$item['prod_id'];?>">
                                                    <button type="submit" name="del-pan" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else{
                                    echo 'aucune produit trouvé dans le panier';
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