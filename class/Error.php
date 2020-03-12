<?php require_once 'global.php';

class Error
{
    public static function catchError(Exception $e)
    {
        if (DEBUG) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        } else {
            echo $e->getMessage();
        }
        exit;
    }
}