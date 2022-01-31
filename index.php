<?php

use App\Autoload;
use App\Controllers\AdminController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
session_start();
require "Autoload.php";
Autoload::webRun();


$controle = new HomeController;
$login = new LoginController;
$admin = new AdminController;
// FILTER_SANITIZE_URL
//  on recois l'url des demande de page
$page = explode('/', filter_var($_GET["url"]),FILTER_SANITIZE_URL);
// var_dump($page);
try {
    // echo "<pre>";
    // var_dump($page);
    if (empty($_GET["url"])) {
        $controle->home();
    } else {
        switch ($page[0]) {
            case 'home': $controle->home();
                break;
            default: throw new Exception("La page n'existe pas"); 
        }
    }
} catch (Exception $e) {
    header('HTTP/1.0 404 Not found');
}