<?php
session_start();

require_once __DIR__ . "/../config-dev.php";
require_once "../view/accueil.php";
require_once "../view/contact.php";

try {
    $connectPDO = new PDO(
        DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_LOGIN,
        DB_PWD
    );
        $connectPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $connectPDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    
}catch(Exception $e){
    die($e->getMessage());
}
// test if connection works
echo "Connexion DB OK<br>";