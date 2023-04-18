<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('templates');
$twig   = new Environment($loader);

$page = !isset($_GET['page']) ? 'home' : $_GET['page'];

echo $twig->render('pages/' . $page . '.twig', $_GET);


