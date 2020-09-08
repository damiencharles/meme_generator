<?php 

class ImagesManager {
    public static function getImages($bdd){
        $images = $bdd->query('SELECT * FROM images')->fetchall(PDO::FETCH_OBJ);
        return $images;
    }

    public static function newImage($bdd, $nom, $img){
        $query = "INSERT INTO images (id, nom, lien) VALUES (NULL, '$nom', '$img')";
        var_dump($query);
        $newImage = $bdd->query($query);
        return $newImage;
    }

}
