<?php
$bdd = connexion();
include('./src/ImagesManager.php');
$images = ImagesManager::getImages($bdd);
?>
<div class="container p-3">

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>
    <p>  ou choisir une image dans notre bibliothèque
    <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <?php 
            foreach ($images as $image) {?>
        <option><?php echo $image->nom?></option>
        <?php }?>   
    </select>

</p>

    <div class="row">
        <?php 
        foreach ($images as $image) {?>
            <div class="col-3">
                <img src="<?php echo $image->lien?>" class="img-fluid w-75" alt="">
                <p><?php echo $image->nom?></p>
            </div>
            <?php }?> 
    </div>
    <div>
Ecrire votre texte
<input type="text" name="texte" class="form-control" >
</div>

</div>
