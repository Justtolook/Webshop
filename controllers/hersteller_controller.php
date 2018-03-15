<?php
class HerstellerController {
    public static function index() {
        $arrayHersteller = array();
        $Hersteller_list = HerstellerRepository::all();

        foreach($Hersteller_list->fetchAll() as $hersteller) {
            $arrayHersteller[] = new Hersteller($hersteller['Name'], $hersteller['Webadresse'], $hersteller['E-Mail']);
        }
        require_once('views/hersteller/index.php');
    }
}
?>