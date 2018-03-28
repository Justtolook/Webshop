<?php
class ProfilController {
    public function index() {
        $profil_raw = array();
        $profil_list = ProfilRepository::profilInfo();
        $profil_raw = $profil_list->fetchAll();
        $profil = $profil_raw[0];

        $profil = new Profil($profil['Kennung'], $profil['Vorname'], $profil['Nachname'], $profil['Strasse'], $profil['Ort'], $profil['PLZ'], $profil['Kontonummer'], $profil['BLZ'], $profil['Institut'], $profil['Passwort']);

        require_once('views/profil/index.php');
    }
}
?>