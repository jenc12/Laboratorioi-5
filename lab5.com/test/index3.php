<?php
    
    if(session_status() == 1 )session_start();
    echo "<br> el estatus de la sesion es: ". session_status();
    session_destroy();

?>