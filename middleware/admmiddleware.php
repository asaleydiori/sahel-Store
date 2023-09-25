<?php 
        include('../functions/myfunctions.php');
        if(isset($_SESSION['auth']))
        {
                if($_SESSION['type']==0)
                {
                        $_SESSION['message'] = "Vous n'etes pas autoriser a acceder a cette page";
                         header('Location: ../index.php');
                        
                }

        }
        else
        {
            $_SESSION['message'] = "Connectez vous pour continuer";
             header('Location: ../login.php');
        }
 ?>