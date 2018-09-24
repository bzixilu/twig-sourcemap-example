<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/vendor/bzixilu/twig-sourcemap/src/SourceMapTwigEnvironment.php';

// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');

 // Instantiate our Twig
$twig = new SourceMapTwigEnvironment($loader);

$twig->setOutputPath('/home/bzi/PhpstormProjects/twig-sourcemap-example/output');
$twig->setCache('/home/bzi/PhpstormProjects/twig-sourcemap-example/output');