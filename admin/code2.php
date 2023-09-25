<?php
    include('../config/dbcon.php');
    include('../functions/myfunctions.php');

    if(isset($_POST['add-prod']))
    {
        $name = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $category = $_POST['categorie'];
        $boutique = $_POST['boutique'];
        $image1 = $_FILES['image1']['name'];
        $image2 = $_FILES['image2']['name'];
        $image3 = $_FILES['image3']['name'];
        $image4 = $_FILES['image4']['name'];
        $image5 = $_FILES['image5']['name'];
        $video = $_FILES['video']['name'];


        $path = "../uploads";
        $counter = 1; // Variable compteur pour les noms de fichiers
        if (!empty($_FILES['image1']['name'])) {
            $image1_ext = pathinfo($image1, PATHINFO_EXTENSION);
            $img1name = time().'_'.$counter.'.'.$image1_ext;
            move_uploaded_file($_FILES["image1"]["tmp_name"], $path.'/'.$img1name);
            $counter++; // Incrémenter le compteur
        }
        else {
            $img1name="default.png";
        }
        
        if (!empty($_FILES['image2']['name'])) {
        $image2_ext = pathinfo($image2, PATHINFO_EXTENSION);
        $img2name = time().'_'.$counter.'.'.$image2_ext;
        move_uploaded_file($_FILES["image2"]["tmp_name"], $path.'/'.$img2name);
        $counter++; // Incrémenter le compteur
        }
        else{
            $img2name="default.png";
        }
        if (!empty($_FILES['image3']['name'])) {
        $image3_ext = pathinfo($image3, PATHINFO_EXTENSION);
        $img3name = time().'_'.$counter.'.'.$image3_ext;
        move_uploaded_file($_FILES["image3"]["tmp_name"], $path.'/'.$img3name);
        $counter++; // Incrémenter le compteur
        }
        else{
            $img3name="default.png";
        }

        if (!empty($_FILES['image4']['name'])) {
        $image4_ext = pathinfo($image4, PATHINFO_EXTENSION);
        $img4name = time().'_'.$counter.'.'.$image4_ext;
        move_uploaded_file($_FILES["image4"]["tmp_name"], $path.'/'.$img4name);
        $counter++; // Incrémenter le compteur
        }
        else{
            $img4name = "default.png";
        }

        if (!empty($_FILES['image1']['name'])) {
        $image5_ext = pathinfo($image5, PATHINFO_EXTENSION);
        $img5name = time().'_'.$counter.'.'.$image5_ext;
        move_uploaded_file($_FILES["image5"]["tmp_name"], $path.'/'.$img5name);
        $counter++; // Incrémenter le compteur
        }
        else{
            $img5name="default.png";
        }

        if (!empty($_FILES['video']['name'])) {
        $video_ext = pathinfo($video, PATHINFO_EXTENSION);
        $videoname = time().'_'.$counter.'.'.$video_ext;
        move_uploaded_file($_FILES["video"]["tmp_name"], $path.'/'.$videoname);
        }
        else{
            $videoname="default.png";
        }

        $prodquery = "INSERT INTO produit(nom, description, prix, categorie, image1, image2, image3, image4, image5, video, boutique) VALUES ('$name', '$description', '$prix', '$category', '$img1name', '$img2name', '$img3name', '$img4name', '$img5name', '$videoname', '$boutique')";
        $prodquery_run = mysqli_query($con, $prodquery);

        if($prodquery_run)
        {          
            header('Location: product.php');
        }
    }
?>
