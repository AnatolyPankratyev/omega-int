<?php


namespace app\controllers\admin;


use RedBeanPHP\R;

class MainController extends AppController
{
    public function indexAction() {

        $countRequests = R::count('somes') + R::count('somej') + R::count('some');
        $countServices = R::count('services');
        $countProducts = R::count('products');


        $this->set(compact('countProducts', 'countRequests', 'countServices'));
        $this->setMeta('Панель управления');
    }
}