<?php
spl_autoload_register('AutoLoader');

function AutoLoader($classname)
{
    // $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    // if (strpos($url,'includes') !== false) {
    //     $path = '../classes/';
    // }
    // else
    // {
    //     $path = 'classes/';
    // }
    // $ext = '.class.php';
    // require_once $path . $classname . $ext;

    $dir  = "../classes/";
    $ext = ".class.php";
    $path = $dir . $classname . $ext;

    if (!file_exists($path))
    {
        return false;
    }
    include_once $path;
}
?>