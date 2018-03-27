<?php
    class ServiceRepository {
        public static function anmelden($username, $password) {
            $db = Db::getInstance();
            $req = $db->prepare('SELECT passwort, ID_Kunde FROM Kunde WHERE Kennung = :username ');
            $req->bindParam(':username', $username, PDO::PARAM_STR);
            $req->execute();
            if(isset($req)) {
                $user = $req->fetchAll();
                if(isset($user[0])) {
                    if($user[0][0] == $password) {
                        if(!(isset($_SESSION))) session_start();
                        $_SESSION["var"] = $user[0][1];
                        return true;
                    }
                    
                    else return false;
                }
                else return false;
            }
            else return false;
        }
        public static function registrieren($kennung, $vorname, $nachname, $strasse, $ort, $plz, $kontonummer, $blz, $institut, $passwort) {
            $db = Db::getInstance();
            //TODO: vor der Anlegung des neuen Benutzers prüfen, ob Kennung bereits vorhanden ist
            $req = $db->prepare('INSERT INTO `kunde` (`ID_Kunde`, `Kennung`, `Vorname`, `Nachname`, `Strasse`, `Ort`, `PLZ`, `Kontonummer`, `BLZ`, `Institut`, `Passwort`) VALUES (NULL, :kennung, :vorname, :nachname, :strasse, :ort, :plz, :kontonummer, :blz, :institut, :passwort)');
            $req->bindParam(':kennung', $kennung, PDO::PARAM_STR);
            $req->bindParam(':vorname', $vorname, PDO::PARAM_STR);
            $req->bindParam(':nachname', $nachname, PDO::PARAM_STR);
            $req->bindParam(':strasse', $strasse, PDO::PARAM_STR);
            $req->bindParam(':ort', $ort, PDO::PARAM_STR);
            $req->bindParam(':plz', $plz, PDO::PARAM_STR);
            $req->bindParam(':kontonummer', $kontonummer, PDO::PARAM_STR);
            $req->bindParam(':blz', $blz, PDO::PARAM_STR);
            $req->bindParam(':institut', $institut, PDO::PARAM_STR);
            $req->bindParam(':passwort', $passwort, PDO::PARAM_STR);
            $req->execute();
            return $req;
        }

        public static function addToWarenkorb($ID_Produkt, $Menge) {
            $db = Db::getInstance();
            if(!(isset($_SESSION))) session_start();
            
            $user_id = $_SESSION["var"];

            $req = $db->prepare('SELECT Count(*) FROM auswaehlen WHERE ID_Kunde = :user_id AND ID_Produkt = :ID_Produkt');
            $req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
            $req->bindValue(':ID_Produkt', $ID_Produkt, PDO::PARAM_INT);
            $req->execute();
            $req = $req->fetchAll();

            if($req[0][0] > 0) {
                $req = $db->prepare('UPDATE auswaehlen SET Anzahl = Anzahl + :Menge WHERE ID_Kunde = :user_id AND ID_Produkt = :ID_Produkt');
            }
            else {
                $req = $db->prepare('INSERT INTO auswaehlen (ID_Kunde, ID_Produkt, Anzahl) VALUES (:user_id, :ID_Produkt, :Menge)');
            }
            $req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
            $req->bindValue(':ID_Produkt', $ID_Produkt, PDO::PARAM_INT);
            $req->bindParam(':Menge', $Menge, PDO::PARAM_INT);
            $req->execute();

            return $req;
        }

    }
?>