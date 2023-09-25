<?php 

    session_start();
    include('../config/dbcon.php');

    if(isset($_POST['registerBtn']))
    {
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']); 
        $location = mysqli_real_escape_string($con,$_POST['location']);
        $mail = mysqli_real_escape_string($con,$_POST['mail']);
        $pswd = mysqli_real_escape_string($con,$_POST['pswd']);
        $cpswd = mysqli_real_escape_string($con,$_POST['cpswd']);

        //check existed email
        $check_email_query = "SELECT  email FROM utilisateurs WHERE email='$mail'";
        $check_email_query_run = mysqli_query($con,$check_email_query);

        if(mysqli_num_rows($check_email_query_run) >0)
        {
            $_SESSION['message'] = "Cette adresse mail existe deja";
                header('Location: ../register.php');
        }
        else
        {
                 if($pswd == $cpswd)
                 {
                     $insert_query = "INSERT INTO utilisateurs (nom,email,telephone,password,localite) VALUES ('$name','$mail','$phone','$pswd','$location')";
                     $insert_query_run = mysqli_query($con,$insert_query);

                     if($insert_query_run)
                     {
                         $_SESSION['message'] = "inscrit avec succès";
                         header('Location: ../login.php');
                     }
                     else
                     {
                         $_SESSION['message'] = "nous n'arrivont pas à vous inscrire,reesayez";
                         header('Location: ../register.php');
                     }
                 }
                 else
                 {
                     $_SESSION['message'] = "les mot de pass ne concordent pas";
                     header('Location: ../register.php');
                 }
        }
    }
    else if(isset($_POST['loginBtn']))
    {
        $mail = mysqli_real_escape_string($con,$_POST['mail']);
        $pswd = mysqli_real_escape_string($con,$_POST['pswd']);

        $login_query = "SELECT * FROM utilisateurs WHERE email = '$mail' AND password ='$pswd'";
        $login_query_run = mysqli_query($con,$login_query);

        $user_data = mysqli_fetch_array($login_query_run);

        $userid = $user_data['id'];
        $username = $user_data['nom'];
        $useremail = $user_data['email'];
        $type = $user_data['type'];

        if(mysqli_num_rows($login_query_run) > 0)
        {
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = 
            [ 
                'user_id' => $userid,
                'name' => $username,
                'email' => $useremail
            ];

            $_SESSION['type']= $type;

            if($type == 1)
            {
                $_SESSION['message'] = "Bienvenu cher administrateur";
                 header('Location: ../admin/index.php');
            }
            else{
                $_SESSION['message'] = "connecte";
            header('Location: ../index.php');
            } 

        }
        else{
           $_SESSION['message'] = "identifiants incorrect";
           header('Location: ../login.php');
        }
    }
?>