<?php
echo '<h2>Sesiones y Cookies</h2>';
setcookie("politica", "true");
echo var_dump($_COOKIE);
if($_COOKIE['politica']=="true"){
        echo "has acertado la privacidad";

}
    echo "no hay cookie";else{

    }
session_start();
$_SESSION['busqueda']="camisa";