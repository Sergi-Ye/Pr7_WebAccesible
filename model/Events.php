<?php
class Events {
    private $ID_Event;
    private $Name;
    private $Description;
    private $Date;
    private $Location;

    public function __construct($ID_Event, $Name, $Description, $Date, $Location){
        $this->ID_Event = $ID_Event;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Date = $Date;
        $this->Location = $Location;
    }

    public function getID_Event(){
        return $this->ID_Event;
    }

    public function getName(){
        return $this->Name;
    }

    public function getDescription(){
        return $this->Description;
    }

    public function getDate(){
        return $this->Date;
    }

    public function getLocation(){
        return $this->Location;
    }

    public function setID_Event($ID_Event){
        $this->ID_Event = $ID_Event;
    }

    public function setName($Name){
        $this->Name = $Name;
    }

    public function setDescription($Description){
        $this->Description = $Description;
    }

    public function setDate($Date){
        $this->Date = $Date;
    }

    public function setLocation($Location){
        $this->Location = $Location;
    }
}
?>
