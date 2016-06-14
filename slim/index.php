<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name){
	echo "TEsting, $name";
});

$app->get('/househould', function($name){
	echo "Linus, Fredrik, ";
	
});

$app->run();
