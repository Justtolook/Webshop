<?php
class profil {
    protected $kennung;
    protected $vorname;
    protected $nachname;
    protected $strasse;
    protected $ort;
    protected $plz;
    protected $kontonummer;
    protected $blz;
    protected $institut;
    protected $password;

    public function __construct($kennung, $vorname, $nachname, $strasse, $ort, $plz, $kontonummer, $blz, $institut, $password) {
        $this->setKennung($kennung);
        $this->setVorname($vorname);
        $this->setNachname($nachname);
        $this->setStrasse($strasse);
        $this->setOrt($ort);
        $this->setPlz($plz);
        $this->setKontonummer($kontonummer);
        $this->setBlz($blz);
        $this->setInstitut($institut);
        $this->setPassword($password);
    }

    public function getKennung(){return $this->kennung;}
	public function setKennung($kennung){$this->kennung = $kennung;}

	public function getVorname(){return $this->vorname;}
	public function setVorname($vorname){$this->vorname = $vorname;}

	public function getNachname(){return $this->nachname;}
	public function setNachname($nachname){$this->nachname = $nachname;}

	public function getStrasse(){return $this->strasse;}
	public function setStrasse($strasse){$this->strasse = $strasse;}

	public function getOrt(){return $this->ort;}
	public function setOrt($ort){$this->ort = $ort;}

	public function getPlz(){return $this->plz;}
	public function setPlz($plz){$this->plz = $plz;}

	public function getKontonummer(){return $this->kontonummer;}
	public function setKontonummer($kontonummer){$this->kontonummer = $kontonummer;}

	public function getBlz(){return $this->blz;}
	public function setBlz($blz){$this->blz = $blz;}

	public function getInstitut(){return $this->institut;}
	public function setInstitut($institut){$this->institut = $institut;}

	public function getPassword(){return $this->password;}
	public function setPassword($password){$this->password = $password;}
}
?>