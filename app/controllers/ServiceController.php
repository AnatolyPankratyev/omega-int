<?php


namespace app\controllers;


use RedBeanPHP\R;

class ServiceController extends AppController
{
    private $desc = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $keywords = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $title_begin = 'Omega Interior - ';

    public function indexAction(){
        $services = AppController::getServices();
        $products = AppController::getProducts();
        $page_title = $this->title_begin . 'Услуги';
        $this->set(compact('services', 'products'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function viewAction() {
        $alias = $this->route['alias'];
        $service = R::findOne('services', 'alias = ?', [$alias]);
        if (!$service) {
            throw new \Exception('Страница не найдена', 404);
        }
        $content = R::findOne('services_content', 'id = ?', [$service->var_id]);
        $prices = R::findAll('services_prices', 'service_id = ?', [$service->id]);
        $this->set(compact('service', 'content', 'prices'));
        $page_title = $this->title_begin . ' ' . $service->title;
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}