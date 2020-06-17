<?php


namespace app\controllers;


use RedBeanPHP\R;

class DoorsOakController extends AppController
{
    private $desc = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $keywords = 'Omega Interior. Покраска мебели. Покраска мебельных фасадов. Покраска дверей. Покраска дверей массив. Профессиональная покраска. Двери массив дуб. Двери массив сосна. Двери лофт. Покраска МДФ. Поркаска массив. Покарска массив сосны. Покраска массив сосна. Покарска массив дуб.';
    private $title_begin = 'Omega Interior - ';

    public function indexAction(){
        $page_title = $this->title_begin . 'Двери массив Дуб';
        $doors = R::findAll('doorsoak');
        $this->set(compact('doors'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function viewAction() {
        $alias = $this->route['alias'];
        $door = R::findOne('doorsoak', 'alias = ?', [$alias]);
        if (!$door) {
            throw new \Exception('Страница не найдена', 404);
        }
        $content = R::findOne('doors_content', 'id = ?', [$door->var_id]);
        $this->set(compact('door', 'content'));
        $page_title = $this->title_begin . ' ' . $door->title;
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}