<?php
    try
{
        $bdd = new PDO('mysql:host=localhost;dbname=linkbiography', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}catch(Exception $erreur)
{
    die('Erreur' .$erreur->getMessage());
}

?>