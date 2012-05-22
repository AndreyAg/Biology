<?php

$currentPage = 'main';
$availablePages = array('main','dress','feed','gladden');

if(isset($_GET['url'])) {
    $currentPage = str_replace('/', '', $_GET['url']);
    if(!in_array($currentPage, $availablePages)) {
        $currentPage = 'main';
    }
}

$currentPage = strtolower($currentPage);

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$twig = new Twig_Environment(new Twig_Loader_Filesystem('templates'), array(
    'cache'       => 'templates_cache',
    'auto_reload' => true
));

$template = $twig->loadTemplate("{$currentPage}.html");

$template->display(array(
    'currentPage' => $currentPage
));