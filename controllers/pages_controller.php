<?php
  class PagesController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }

    public function anmeldung() {
      require_once('views/pages/anmeldung.php');
    }

    public function error_invalid_session() {
      require_once('views/pages/error_invalid_session.php');
    }

    public function loginfailed() {
      require_once('views/pages/loginfailed.php');
    }

    public function loginsuccessfull() {
      require_once('views/pages/loginsuccessfull.php');
    }

    public function registrierung() {
      require_once('views/pages/registrierung.php');
    }

    public function abgemeldet() {
      require_once('views/pages/abgemeldet.php');
    }

    public function error_existingUser() {
      require_once('views/pages/error_existingUser.php');
    }
    
  }
?>