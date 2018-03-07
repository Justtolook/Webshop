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

        }
    }
    
?>