<?php


namespace app\controllers;


use RedBeanPHP\R;

class JalousieController extends AppController
{
    private $desc = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $keywords = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $title_begin = 'Omega Interior - ';

    public function indexAction(){
        $page_title = $this->title_begin . 'Жалюзийные дверцы';
        $prices = R::findAll('jal_prices');
        $sq_m_price = R::findOne('jal_sq_m_price', 'id = 1');

        $jalousie = R::findAll('jalousie');
        $this->set(compact('jalousie', 'prices', 'sq_m_price'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}