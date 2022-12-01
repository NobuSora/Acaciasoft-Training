<?php
spl_autoload_register('AutoLoader');
function AutoLoader($functionName)
{
    $dir  = "../functions/";
    $ext = ".php";
    $path = $dir . $functionName . $ext;

    if (!file_exists($path))
    {
        return false;
    }
    include_once $path;
}
?>