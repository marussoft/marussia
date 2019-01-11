<?php

class Autoload
{
    public static function Load($class_name)
    {
        $path = ROOT . '/' . lcfirst(str_replace('\\', '/', $class_name)) . '.php';
        
        if (is_file($path)) {
            return include_once($path);
        }
        
        return false;
    }
}
