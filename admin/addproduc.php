<?php
    include('../middleware/admmiddleware.php');
    include('includes/header.php');
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter un produit</h4>
                    </div>
                    <div class="card-body">
                        <form action="code2.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Nom</label>
                                    <input type="text" name="nom" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Description</label>
                                    <input type="text" name="description" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Prix</label>
                                    <input type="number" name="prix" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Categorie</label>
                                    <input type="text" name="categorie" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">image1</label>
                                    <input type="file" name="image1" class="form-control"/>                                </div><br><br>
                                <div class="col-md-5">
                                    <label for="">image2</label>
                                    <input type="file" name="image2" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">image3</label>
                                    <input type="file" name="image3" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">image4</label>
                                    <input type="file" name="image4" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">image5</label>
                                    <input type="file" name="image5" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">video</label>
                                    <input type="file" name="video" class="form-control"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Boutique</label>
                                    <input type="text" name="boutique" class="form-control"/>
                                </div>
                                <div class="col-md-10">
                                    
                                </div>
                                <div class="col-md-5 justify-content-center">
                                    <button type="submit" name="add-prod" class="btn btn-primary"> enregistrer</button>
                                </div>
                            </div>
                                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php   ?><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  $(function () {
    // Multiple images preview with JavaScript
    var multiImgPreview = function (input, imgPreviewPlaceholder) {
      if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();
          reader.onload = function (event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
          }
          reader.readAsDataURL(input.files[i]);
        }
      }
    };
    $('#chooseFile').on('change', function () {
      multiImgPreview(this, 'div.imgGallery');
    });
  });
</script>