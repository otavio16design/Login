<?php

session_start();

//dados para banco de dados
define('HOST','mysql:host=localhost;dbname=necbrasil');
define('USER','root');
define('PASSWORD','');

$autoload = function($class){
    include(str_replace("\\","/",__DIR__."/".$class.".php"));
};

spl_autoload_register($autoload);