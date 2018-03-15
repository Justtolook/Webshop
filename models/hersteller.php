<?php
class Hersteller {
    protected $Name;
    protected $Adresse;
    protected $Email;

    public function __construct($Name, $Adresse, $Email) {
        $this->setName($Name);
        $this->setAdresse($Adresse);
        $this->setEmail($Email);
    }

    public function getName() {return $this->Name;}
    public function getAdresse() {return $this->Adresse;}
    public function getEmail() {return $this->Email;}

    public function setName($Name) { $this->Name = $Name;}
    public function setAdresse($Adresse) {$this->Adresse = $Adresse;}
    public function setEmail($Email) {$this->Email = $Email;}  
}
?>