<?php 

class ImagesManager {
    public static function getImages(){
        $bdd = connexion();
        $images = $bdd->query('SELECT * FROM images')->fetchall(PDO::FETCH_OBJ);
        return $images;
}
}