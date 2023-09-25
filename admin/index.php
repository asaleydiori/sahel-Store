<?php  
include('../middleware/admmiddleware.php');
include('includes/header.php');
?>


<style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .flex-item {
            flex-basis: calc(33.33% - 20px);
            padding: 10px;
            border: 0px solid #ccc;
            text-align: center;
            margin-bottom: 20px;
        }

        .icon {
            font-size: 80px;
            margin-bottom: 5px;
        }
        

    </style>

       <?php
       $vl= VlPanierCount();
       if ($vl)
        {
        $row = mysqli_fetch_assoc($vl);
        $nb=$row['nb'];
       }
        ?>
    
<div class="container">
    <h1>Les statistiques        </h1>
    <a href="index.php" class="flex-item"><div class="flex-container">
        <div class="flex-item">
            <i class="fas fa-tachometer-alt dashboard-icon icon"></i>
            <p>Dashborad </p>
        </div></a>
        <a href="nvpanier.php" class="flex-item"><div class="flex-item">
            <i class="fas fa-briefcase icon"></i>
            <p>Nouvelles Commandes </p>
            <h6 class="text-primary mb-2 counter-up" data-toggle="counter-up" ><?php echo $nb; ?></h6>

        </div></a>
        <a href="panier.php" class="flex-item"><div class="flex-item">
            <i class="fas fa-file-alt file-icon icon"></i>
            <p>Voir toutes les commandes </p>
            <h6 class="text-primary mb-2 counter-up" data-toggle="counter-up" ><?php echo $nb; ?></h6>
        </div></a>
        <a href="vlpanier.php" class="flex-item"><div class="flex-item">
            <i class="fas fa-check-circle check-icon icon"></i>
            <p >Commandes Validees</p><P>
                <h6 class="text-primary mb-2 counter-up" data-toggle="counter-up" ><?php echo $nb; ?></h6>
        </div></a>
        <a href="admin.php" class="flex-item"><div class="flex-item">
            <i class="fas fa-user-shield admin-icon icon"></i>
            <p>Admin </p>
            <h6 class="text-primary mb-2 counter-up" data-toggle="counter-up" ><?php echo $nb; ?></h6>
        </div></a>
        <a href="users.php" class="flex-item"><div class="flex-item">
            <i class="fas fa-user icon"></i>
            <p>Utilisateurs </p>
            <h6 class="text-primary mb-2 counter-up" data-toggle="counter-up" ><?php echo $nb; ?></h6>

        </div></a>
    </div>
</div>
</body>
<?php include('includes/footer.php'); ?>