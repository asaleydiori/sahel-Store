<?php
   include('../middleware/admmiddleware.php');
   include('includes/header.php');
    ?>
    
    <div class="container" align="center">
        <div class="col"> 
            <div class="card">
                <div class="card-header">
                    Les Utilisateurs
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Localite</th>
                                <th>Faire Admin</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $category = getUsers();
                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?=$item['id'];?></td>
                                            <td><?=$item['nom'];?></td>
                                            <td><?=$item['email'];?></td>
                                            <td><?=$item['telephone'];?></td>
                                            <td><?=$item['localite'];?></td>
                                           
                                            <td>
                                            <form action="code.php" method="POST">
                                                    <input type="hidden" name="c_id" value="<?=$item['id'];?>">
                                                    <button type="submit" name="val-pan" class="btn btn-danger">Faire Admin</button>
                                                </form> 
                                            </td>
                                            <td>
                                            <form action="code.php" method="POST">
                                                    <input type="hidden" name="c_id" value="<?=$item['id'];?>">
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