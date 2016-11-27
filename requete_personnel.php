<?php
/**
 * Created by PhpStorm.
 * User: Theo
 * Date: 29/10/2016
 * Time: 17:17
 */

try {
    $dbh = new PDO('mysql:host=localhost;dbname=entreprise', "root", "root", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $categorie = $_GET["categorie"];



    $query=$dbh->query('SELECT * FROM `PERSONNEL` WHERE `CAT_Id`='.$categorie);
    $result=$query->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($result);






} catch (Exception $e) {
    print "L'erreur PDO est la suivante : " . $e->getMessage() . "<br/>";
    die();
}
?>