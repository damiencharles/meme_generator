<?php 
include('./src/ImagesManager.php');
$images = ImagesManager::getImages();
?>
<div class="container p-3">
<div>
texte
<input type="text" name="texte" >
<?php 
foreach ($images as $image) {?>
    <img src="<?php echo $image->lien?>" alt="">
<?php }?>
</div>
