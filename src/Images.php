<?php 

Class Images 
{
    public $id;
    public $nom;
    public $lien;

    public function __construct($id, $nom, $lien)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->lien = $lien;
    }

}