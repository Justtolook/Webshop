<?php
class Rechnung{
    protected $id;
    protected $date;
    protected $time;
    protected $value;

    public function __construct($id, $date, $time, $value) {
        $this->setID($id);
        $this->setDate($date);
        $this->setTime($time);
        $this->setValue($value);
    }

    public function setID($id) { $this->id = $id;}
    public function setDate($date) { $this->date = $date;}
    public function setTime($time) { $this->time = $time;}
    public function setValue($value) { $this->value = $value;}

    public function getID() {return $this->id;}
    public function getDate() {return $this->date;}
    public function getTime() {return $this->time;}
    public function getValue() {return $this->value;}
}
?>