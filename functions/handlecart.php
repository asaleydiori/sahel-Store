<?php 
     session_start();
     include('../config/dbcon.php');
    
     if(isset($_SESSION['auth']))
     {
        if(isset($_POST['scope']))
        {
            $scope = $_POST['scope'];
            switch($scope)
            {
                case "add":
                    $prod_id = $_POST['prod_id'];
                    $prod_qty = $_POST['prod_qty'];

                    $user_id = $_SESSION['auth_user']['user_id'];

                    $chk_existing_cart ="SELECT * FROM panier WHERE prod_id='$prod_id' AND user_id='$user_id'";
                    $chk_existing_cart_run = mysqli_query($con,$chk_existing_cart);

                    if(mysqli_num_rows($chk_existing_cart_run)>0)
                    {
                        echo  "existing";
                    }
                    else
                    {
                        $insertQuery = "INSERT INTO panier(user_id, prod_id, prod_qty) VALUES ('$user_id','$prod_id','$prod_qty')";
                        $insertQuery_run = mysqli_query($con,$insertQuery);

                        if($insertQuery_run)
                        {
                            echo 201;
                            
                        }
                        else
                        {
                            echo 500;
                        }
                    }
                    
                    break;
                case "update":
                    $prod_id = $_POST['prod_id'];
                    $prod_qty = $_POST['prod_qty'];

                    $user_id = $_SESSION['auth_user']['user_id'];
                    $chk_existing_cart ="SELECT * FROM panier WHERE prod_id='$prod_id' AND user_id='$user_id'";
                    $chk_existing_cart_run = mysqli_query($con,$chk_existing_cart);

                    if(mysqli_num_rows($chk_existing_cart_run)>0)
                    {
                        $update_query = "UPDATE panier SET prod_qty ='$prod_qty' WHERE prod_id='$prod_id' AND user_id='$user_id' ";
                        $update_query_run = mysqli_query($con,$update_query);

                        if($update_query_run)
                        {
                            echo 200;
                        }
                        else{
                            echo 500;
                        }
                    }
                    else
                    {
                        echo "erreur";
                    }
                    
                    break;
                case "delete":
                    $cart_id = $_POST['cart_id'];
                    $user_id = $_SESSION['auth_user']['user_id'];
                    $chk_existing_cart ="SELECT * FROM panier WHERE id='$cart_id' AND user_id='$user_id'";
                    $chk_existing_cart_run = mysqli_query($con,$chk_existing_cart);

                    if(mysqli_num_rows($chk_existing_cart_run)>0)
                    {
                        $delete_query = "DELETE FROM panier  WHERE id='$cart_id' ";
                        $delete_query_run = mysqli_query($con,$delete_query);

                        if($delete_query_run)
                        {
                            echo 200;
                        }
                        else{
                            echo 500;
                        }
                    }
                    else{

                    }
                break;


                default:
                    echo 500;
            }
        }

     }
     else
     {
        echo 401;
     }
?>