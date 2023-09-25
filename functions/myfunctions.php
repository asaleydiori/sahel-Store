<?php
    session_start();
    include('../config/dbcon.php');


    function getBoutique($boutique)
    {
        global $con;
        $query = "SELECT * FROM produit WHERE boutique = '$boutique'";
        return $query_run = mysqli_query($con,$query);
    }
    function getPanier()
    {
        global $con;
        $query = "SELECT prod_id,prod_qty,pn.id as idp,p.nom prnom,prix,u.nom,telephone,p.id,pn.user_id,u.id FROM panier pn,produit p,utilisateurs u where prod_id=p.id and valide=0 and pn.user_id=u.id";
        return $query_run = mysqli_query($con,$query);
    }
    function getAllPanier()
    {
        global $con;
        $query = "SELECT prod_id,prod_qty,pn.id as idp,p.nom prnom,prix,u.nom,telephone,p.id,pn.user_id,u.id FROM panier pn,produit p,utilisateurs u where prod_id=p.id and pn.user_id=u.id";
        return $query_run = mysqli_query($con,$query);
    }
    function getVlPanier()
    {
        global $con;
        $query = "SELECT prod_id,prod_qty,pn.id as idp,p.nom prnom,prix,u.nom,telephone,p.id,pn.user_id,u.id FROM panier pn,produit p,utilisateurs u where prod_id=p.id and valide=1 and pn.user_id=u.id";
        return $query_run = mysqli_query($con,$query);
    }
    function VlPanierCount()
    {
        global $con;
        $query = "SELECT COUNT(*) as nb FROM panier WHERE VALIDE = 1";
        return $query_run = mysqli_query($con,$query);
    }

    function getRecent()
    {
        global $con;
        $query = "SELECT * FROM produit p ORDER BY id DESC LIMIT 5";
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

    function redirect($url,$message)
    {
        $_SESSION['massage'] = $message;
        header('Location : '.$url);
        exit();
    }
    function getUsers()
    {
        global $con;
        $query = "SELECT * from utilisateurs WHERE type = 0";
        return $query_run = mysqli_query($con,$query);
    }
    function getAdmin()
    {
        global $con;
        $query = "SELECT * from utilisateurs WHERE type = 1";
        return $query_run = mysqli_query($con,$query);
    }
    ?>