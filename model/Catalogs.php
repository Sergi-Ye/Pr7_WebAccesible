<?php
class Catalogs {
    private $Email;
    private $ID_Event;

    public function __construct($Email, $ID_Event){
        $this->Email = $Email;
        $this->ID_Event = $ID_Event;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function getID_Event(){
        return $this->ID_Event;
    }

    public function setEmail($Email){
        $this->Email = $Email;
    }

    public function setID_Event($ID_Event){
        $this->ID_Event = $ID_Event;
    }
}
?>
