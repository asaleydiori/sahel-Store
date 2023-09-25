<?php 
    
    include('../config/dbcon.php');
    include('../functions/myfunctions.php');

    if(isset($_POST['add-cat']))
    {
        $name = $_POST['nom'];
        $boutique = $_POST['boutique'];

        $catquery = "INSERT INTO categorie (nom, boutique) VALUES ('$name','$boutique')";
        $catquery_run = mysqli_query($con,$catquery);

        if($catquery_run){
            header('Location: category.php');
        }
        else
        {
            redirect("category.php","un probleme est survenu");
        }
    }
    else if(isset($_POST['updt-cat']))
    {
        $name = $_POST['nom'];
        $boutique = $_POST['boutique'];

        $upcatquery = "UPDATE categorie SET nom='$name', boutique='$boutique')";
        $upcatquery_run = mysqli_query($con,$upcatqueryu);
        header('Location: category.php');
        }

     else if(isset($_POST['del-cat']))
     {
        $cat_id = mysqli_real_escape_string($con,$_POST['c_id']);
        
        $delete = "DELETE FROM categorie WHERE id='$cat_id'";
        $delete_run = mysqli_query($con,$delete);

        if($delete_run){
            header('Location: category.php');
            $_SESSION['message'] = "succes";
        }
        else
        {
            redirect("category.php","un proble est survenu");
        }
        }   
        else if(isset($_POST['val-pan']))
        { $pan_id = mysqli_real_escape_string($con,$_POST['c_id']);
        
            $delete = "UPDATE panier SET  valide =1 WHERE id='$pan_id'";
            $delete_run = mysqli_query($con,$delete);
            if($delete_run){
                header('Location: panier.php');
                $_SESSION['message'] = "succes";
            }
            else
            {
                redirect("panier.php","un proble est survenu");
            }
           
        }
        else if(isset($_POST['del-pan']))
        {
            $pan_id = mysqli_real_escape_string($con,$_POST['c_id']);
        
            $delete = "DELETE FROM panier WHERE id='$pan_id'";
            $delete_run = mysqli_query($con,$delete);
            if($delete_run){
                header('Location: panier.php');
                $_SESSION['message'] = "succes";
            }
            else
            {
                redirect("panier.php","un proble est survenu");
            }
        }
       
?>