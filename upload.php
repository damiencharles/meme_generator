<?php
require('./src/ImagesManager.php');
require('connexion_bdd.php');
$bdd = connexion();

if (isset($_POST) && !empty($_POST)){
    $uploads_dir = "assets/uploads";
    $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
    // basename() peut empêcher les attaques de système de fichiers;
    // la validation/assainissement supplémentaire du nom de fichier peut être approprié
    $name = basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

    $img = "$uploads_dir/$name";
    var_dump($bdd);

    ImagesManager::newImage($bdd, $name, $img);



}