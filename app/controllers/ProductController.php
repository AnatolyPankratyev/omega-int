<?php


namespace app\controllers;


use RedBeanPHP\R;

class ProductController extends AppController
{
    private $desc = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $keywords = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $title_begin = 'Omega Interior - ';

    public function indexAction(){
        $services = AppController::getServices();
        $products = AppController::getProducts();
        $page_title = $this->title_begin . 'Готовая продукция';
        $this->set(compact('services', 'products'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}