<?php
require 'vendor/autoload.php';

use \Slim\Slim as Slim;

/*
 * Change the debug value to FALSE if your app runs on Production
 */

class App extends Slim {
    public function __construct () {
        return parent::__construct(
            array(
                'debug' => true,
            )
        );
    }

}