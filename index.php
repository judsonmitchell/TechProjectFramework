<?php

$f3=require('lib/base.php');
$f3->set('DEBUG',2);
$f3->set('UI','ui/,ui/templates/');
$f3->set('AUTOLOAD','app/');
$f3->config('config.ini');
$f3->set('DB', new DB\SQL('mysql:host='. $f3->get('db_host') .
';port=3306;dbname=' . $f3->get('db_name') , $f3->get('db_user'),$f3->get('db_pass')));             

//main route
$f3->route('GET /',
	function($f3) {
        $f3->reroute('/users/login');
    }
);

//user routes
$f3->route('POST /users/login_user','Users->login_user');
$f3->route('POST /users/add','Users->add');
$f3->route('GET /users/new_password_prompt/@key','Users->new_password_prompt');
$f3->route('GET|POST /users/@action','Users->@action');

$f3->run();
