<?php

namespace app\controllers;

use app\models\AppModel;
use project\App;
use project\base\Controller;
use RedBeanPHP\R;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('services', self::getServices());
        App::$app->setProperty('products', self::getProducts());
    }

    public static function getServices() {
        if (R::findAll('services')) {
            $services = R::findAll('services');
        }
        return $services;
    }

    public static function getProducts() {
        if (R::findAll('products')) {
            $products = R::findAll('products');
        }
        return $products;
    }

}