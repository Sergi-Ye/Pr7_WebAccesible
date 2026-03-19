<?php
class Mangas {
    private $ID_Mangas;
    private $Name;
    private $Chapter_Count;
    private $Description;
    private $Email;

    public function __construct($ID_Mangas, $Name, $Chapter_Count, $Description, $Email){
        $this->ID_Mangas = $ID_Mangas;
        $this->Name = $Name;
        $this->Chapter_Count = $Chapter_Count;
        $this->Description = $Description;
        $this->Email = $Email;
    }

    public function getID_Mangas(){
        return $this->ID_Mangas;
    }

    public function getName(){
        return $this->Name;
    }

    public function getChapter_Count(){
        return $this->Chapter_Count;
    }

    public function getDescription(){
        return $this->Description;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function setID_Mangas($ID_Mangas){
        $this->ID_Mangas = $ID_Mangas;
    }

    public function setName($Name){
        $this->Name = $Name;
    }

    public function setChapter_Count($Chapter_Count){
        $this->Chapter_Count = $Chapter_Count;
    }

    public function setDescription($Description){
        $this->Description = $Description;
    }

    public function setEmail($Email){
        $this->Email = $Email;
    }
}
?>