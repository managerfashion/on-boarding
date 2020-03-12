<?php

require_once 'class/config.php';

spl_autoload_register('loadClass');

function loadClass($nameClass)
{
    if(file_exists('class/' . $nameClass . '.php'))
    {
        require_once 'class/' . $nameClass . '.php';
    }
}