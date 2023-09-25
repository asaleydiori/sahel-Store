<?php
    session_start();
    include('config/dbcon.php');


    function getBoutiqueAll($boutique)
    {
        global $con;
        $query = "SELECT * FROM produit WHERE boutique = '$boutique' ORDER BY id DESC ";
        return $query_run = mysqli_query($con,$query);
    }
    function getBoutique($boutique)
    {
        global $con;
        $query = "SELECT * FROM produit WHERE boutique = '$boutique' ORDER BY id DESC LIMIT 5";
        return $query_run = mysqli_query($con,$query);
    }

    
    function getSahel($boutique)
    {
        global $con;
        $query = "SELECT * FROM produit WHERE boutique = '$boutique' ORDER BY id DESC ";
        return $query_run = mysqli_query($con,$query);
    }

    function getRecent()
    {
        global $con;
        $query = "SELECT * FROM produit p ORDER BY id DESC LIMIT 5 ";
        return $query_run = mysqli_query($con,$query);
    }

    function getAll ($table)
    {
        global $con;
        $query = "SELECT * FROM $table";
        return $query_run = mysqli_query($con,$query);
    }

    function getById($table,$id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE id='$id'";
        return $query_run = mysqli_query($con,$query);
    }

    function getCartItem()
    {
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];

        $query = "SELECT c.id as cid,c.prod_id,c.prod_qty,p.id,p.nom,p.image1,p.prix 
        FROM panier c, produit p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC";
        return $query_run = mysqli_query($con,$query);
        
    }

    function redirect($url,$message)
    {
        $_SESSION['massage'] = $message;
        header('Location : '.$url);
        exit();
    }
    
    ?>