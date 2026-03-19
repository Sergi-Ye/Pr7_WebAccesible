<?php
class Episodes {
    private $ID_Episodes;
    private $AnimeName;
    private $Title;
    private $EpisodeNumber;
    private $ID_Anime;

    public function __construct($ID_Episodes, $AnimeName, $Title, $EpisodeNumber, $ID_Anime){
        $this->ID_Episodes = $ID_Episodes;
        $this->AnimeName = $AnimeName;
        $this->Title = $Title;
        $this->EpisodeNumber = $EpisodeNumber;
        $this->ID_Anime = $ID_Anime;
    }

    public function getID_Episodes(){
        return $this->ID_Episodes;
    }

    public function getAnimeName(){
        return $this->AnimeName;
    }

    public function getTitle(){
        return $this->Title;
    }

    public function getEpisodeNumber(){
        return $this->EpisodeNumber;
    }

    public function getID_Anime(){
        return $this->ID_Anime;
    }

    public function setID_Episodes($ID_Episodes){
        $this->ID_Episodes = $ID_Episodes;
    }

    public function setAnimeName($AnimeName){
        $this->AnimeName = $AnimeName;
    }

    public function setTitle($Title){
        $this->Title = $Title;
    }

    public function setEpisodeNumber($EpisodeNumber){
        $this->EpisodeNumber = $EpisodeNumber;
    }

    public function setID_Anime($ID_Anime){
        $this->ID_Anime = $ID_Anime;
    }
}
?>
