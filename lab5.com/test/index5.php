<?php
    if(session_status() == 1 )session_start();
    if(isset($_COOKIE["user"]))
        echo "el valor de la cookie es: ". $_COOKIE["user"];
    else
        echo "no hay cookies seteadas"
?>