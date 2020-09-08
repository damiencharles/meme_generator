<?php
function connexion(){
        try {
            $bdd = new PDO('mysql:host=localhost; dbname=memegen', 'root');
            return $bdd;
        }
        catch (PDOException $e) {
            echo('echec de la connexion : ' . $e->getMessage());
            exit;
        }  
}