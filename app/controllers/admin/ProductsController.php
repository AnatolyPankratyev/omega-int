<?php


namespace app\controllers\admin;


use RedBeanPHP\R;

class ProductsController extends AppController
{
    public function indexAction() {
        $products = R::findAll('products');


        $this->set(compact('products'));
        $this->setMeta('Готовая продукция');
    }


}