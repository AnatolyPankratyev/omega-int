<?php


namespace app\controllers;


use app\models\Request;
use app\models\RequestJalousie;
use app\models\RequestShort;
use RedBeanPHP\R;

class MainController extends AppController
{
    private $desc = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $keywords = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $title_begin = 'Omega Interior - ';

    public function indexAction(){
        $services = AppController::getServices();
        $products = AppController::getProducts();
        $page_title = $this->title_begin . 'Главная страница';
        $this->set(compact('services', 'products'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function sendAction() {
        if(!empty($_POST)){
            $request = new Request();
            Request::saveRequest($request);
            $user_email = $_POST['email'];
            Request::mailRequest($user_email);
        }
        $this->setMeta('Отправка заявки');
    }

    public function sendShortAction() {
        if(!empty($_POST)){
            $request = new RequestShort();
            RequestShort::saveRequest($request);
            RequestShort::mailRequest();
        }
        $this->setMeta('Отправка заявки');
    }

    public function sendJalousieAction() {
        if(!empty($_POST)){
            $request = new RequestJalousie();
            RequestJalousie::saveRequest($request);
            $user_email = $_POST['email'];
            RequestJalousie::mailRequest($user_email);
        }
        $this->setMeta('Отправка заявки');
    }

    public function thanksAction() {
        $page_title = $this->title_begin . 'Спасибо за заявку';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}