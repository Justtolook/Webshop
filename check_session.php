<?php

if(!isset($_SESSION)) {
    session_start();
    if(!(isset($_SESSION["var"]))) {
        //echo $_SESSION["var"];
        call('pages', 'error_invalid_session');
        //header("Location: error_invalid_session.html");
    }
}

?>