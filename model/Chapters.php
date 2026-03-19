<?php
class Chapters {
    private $ID_Chapters;
    private $AnimeName;
    private $Title;
    private $ChapterNumber;
    private $ID_Mangas;

    public function __construct($ID_Chapters, $AnimeName, $Title, $ChapterNumber, $ID_Mangas){
        $this->ID_Chapters = $ID_Chapters;
        $this->AnimeName = $AnimeName;
        $this->Title = $Title;
        $this->ChapterNumber = $ChapterNumber;
        $this->ID_Mangas = $ID_Mangas;
    }

    public function getID_Chapters(){
        return $this->ID_Chapters;
    }

    public function getAnimeName(){
        return $this->AnimeName;
    }

    public function getTitle(){
        return $this->Title;
    }

    public function getChapterNumber(){
        return $this->ChapterNumber;
    }

    public function getID_Mangas(){
        return $this->ID_Mangas;
    }

    public function setID_Chapters($ID_Chapters){
        $this->ID_Chapters = $ID_Chapters;
    }

    public function setAnimeName($AnimeName){
        $this->AnimeName = $AnimeName;
    }

    public function setTitle($Title){
        $this->Title = $Title;
    }

    public function setChapterNumber($ChapterNumber){
        $this->ChapterNumber = $ChapterNumber;
    }

    public function setID_Mangas($ID_Mangas){
        $this->ID_Mangas = $ID_Mangas;
    }
}
?>
