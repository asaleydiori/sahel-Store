<?php 
    session_start();
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
        $upcatquery_run = mysqli_query($con,$catquery);
        }

     else if(isset($_POST['del-cat']))
     {
        $cat_id = mysqli_real_escape_string($con,$_POST['c_id']);
        
        $delete = "DELETE FROM categorie WHERE id='$cat_id'";
        $delete_run = mysqli_query($con,$delete);

        if($delete_run){
            redirect("category.php","effacee avec succes");
        }
        else
        {
            redirect("category.php","un proble est survenu");
        }
        }   
       
?>