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
                        echo "Logged in";
                        session_start();
                        $_SESSION["var"] = $user[0][1];
                        return true;
                    }
                    
                    else return false;
                }
                else return false;
            }
            else return false;
        }
    }
?>