<?php
    class ServicesController {
        public function anmelden() {
            $status = ServiceRepository::anmelden($_POST['username'], $_POST['password']);
            if($status) call("pages", "loginsuccessfull");
            else call("pages", "loginfailed");
        }

        public function abmelden() {

        }

        public function registrieren() {
            $status = ServiceRepository::registrieren($_POST["kennung"], $_POST["vorname"], $_POST["nachname"], $_POST["strasse"], $_POST["ort"], $_POST["plz"], $_POST["kontonummer"], $_POST["blz"], $_POST["institut"], $_POST["passwort"]);
            if($status) call("pages", "anmeldung");
            else call("pages", "registrierung");
        }

        public function addToWarenkorb() {
            $status = ServiceRepository::addToWarenkorb($_GET['ID_Produkt'], $_GET['Menge']);
            call('products', 'index');
        }
    }
    
?>