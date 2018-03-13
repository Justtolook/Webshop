<?php
class RechnungController {
    public function index() {
        $rechnungen = array();
        $rechnung_list = RechnungRepository::all();

        foreach($rechnung_list->fetchAll() AS $rechnung) {
            $rechnungen[] = new Rechnung($rechnung['ID_Rechnung'], $rechnung['Datum'], $rechnung['Uhrzeit'], $rechnung['Gesamtpreis']);
        }

        require_once('views/rechnung/index.php');
    }
}
?>