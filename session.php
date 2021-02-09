<?php 
session_start();
echo session_status();
if (session_status() == PHP_SESSION_ACTIVE){
    echo "Sessões habilitadas";
}
?>