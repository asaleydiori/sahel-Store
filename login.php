<?php 
include('includes/header.php');
include('includes/navbar.php');

?>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
<style>
    .btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1rem;
    color:#fff;
    background:#ab6806;
    border-radius: .5rem;
    cursor: pointer;
}
.btn:hover{
    letter-spacing: .2rem;
    background:#ab6806;
}
</style>
    
<br><br><br><br><br><br><br><br><div class="py-5" style="padding: 10px;">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <?php if(isset($_SESSION['message'])) 
                { ?>
                <div class="alert alet-warrning alert-dismissible fade show" role="alert">
                    <strong>Salut!</strong><?=$_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                </div>
                <?php
                    unset($_SESSION['message']);
                }?>
                <div class="card">
                    <div class="card-header">
                          <h4>Formulaire de connection</h4> 
                    </div>
                    <div class="card-body">
                        <form action="functions/sign_in.php" method="POST" >
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Adresse Email </label>
                                    <input required type="email" name="mail" placeholder="Entrez votre email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mot de Pass</label>
                                    <input required type="password" name="pswd" placeholder="Entrez un mot de pass" class="form-control" id="exampleInputPassword1">
                                </div>
                               
                               
                               <center> <button type="submit"  name="loginBtn" class="btn btn-primary px-4">Se connecter</button></center>
                               <a href="register.php">Pas de compte? S'inscrire</a>
                        </form>

                    </div>
                </div>
            
            </div>
        </div>
    </div>
  </div>    
<?php
 include('includes/footer.php');
    ?>
    