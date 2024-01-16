<?php
class Character extends Database
{
    //Attribut
    public $id;
    public $name;
    public $atk;
    public $life;
    public $color;

    /**
     * Method construct qui ce connecte a ma base de données
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Method qui permet de recuperer les infos d'un user via son mail
     */
    public function getCharacter()
    {
        $query = "SELECT * FROM `character`;";
        $fetchProfil = $this->db->query($query);
        return $fetchProfil->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertCharacter(){
        $query = 'INSERT INTO `character` (`name`, `atk`,`life`, `color`) VALUES (:name, :atk, :life, :color)';
        $fetchProfil = $this->db->prepare($query);
        $fetchProfil->bindParam(":name", $this->name, PDO::PARAM_STR);
        $fetchProfil->bindParam(":atk", $this->atk, PDO::PARAM_INT);
        $fetchProfil->bindParam(":life", $this->life, PDO::PARAM_INT);
        $fetchProfil->bindParam(":color", $this->color, PDO::PARAM_STR);
        return $fetchProfil->execute();
    }
   
}
