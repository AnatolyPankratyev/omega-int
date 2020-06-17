<?php


namespace app\controllers\admin;


use Exception;
use RedBeanPHP\R;

class RequestController extends AppController
{
    public function indexAction() {

        $simpleRequests = R::findAll('somes');
        $jalousieRequests = R::findAll('somej');
        $paintingRequest = R::findAll('some');

        $this->set(compact('simpleRequests', 'jalousieRequests', 'paintingRequest'));
        $this->setMeta('Заявки');
    }

    public function changesAction(){
        $request_id = $this->getRequestID();
        $status = !empty($_GET['status']) ? '1' : '0';
        $request = R::load('somes', $request_id);
        if(!$request){
            throw new \Exception('Страница не найдена', 404);
        }
        $request->status = $status;
        R::store($request);
        $_SESSION['success'] = 'Изменения сохранены';
        redirect();
    }
    public function changepAction(){
        $request_id = $this->getRequestID();
        $status = !empty($_GET['status']) ? '1' : '0';
        $request = R::load('some', $request_id);
        if(!$request){
            throw new \Exception('Страница не найдена', 404);
        }
        $request->status = $status;
        R::store($request);
        $_SESSION['success'] = 'Изменения сохранены';
        redirect();
    }
    public function changejAction(){
        $request_id = $this->getRequestID();
        $status = !empty($_GET['status']) ? '1' : '0';
        $request = R::load('somej', $request_id);
        if(!$request){
            throw new \Exception('Страница не найдена', 404);
        }
        $request->status = $status;
        R::store($request);
        $_SESSION['success'] = 'Изменения сохранены';
        redirect();
    }

    public function simpleAction() {
        $request_id = $this->getRequestID();
        $request = R::getRow("SELECT `somes`.* FROM `somes` WHERE `somes`.`id` = ?", [$request_id]);
        if(!$request){
            throw new Exception('Страница не найдена', 404);
        }
        $this->setMeta("Простые заявки");
        $this->set(compact('request', 'request_id'));
    }

    public function paintingAction() {
        $request_id = $this->getRequestID();
        $request = R::getRow("SELECT `some`.* FROM `some` WHERE `some`.`id` = ?", [$request_id]);
        if(!$request){
            throw new Exception('Страница не найдена', 404);
        }
        $types_product = array(
            1 => 'Изделие из МДФ',
            2 => 'Массив дерева',
            3 => 'Шпон',
            4 => 'Дверной блок',
            5 => 'Оконный блок',
            6 => 'Столешница',
            7 => 'Подоконник',
            8 => 'Паркетная доска',
            9 => 'Жалюзийная дверца',
        );
        $types_cover = array(
            1 => 'Матовая эмаль',
            2 => 'Полуматовая эмаль',
            3 => 'Глянцевая эмаль',
            4 => 'Высокий глянец (полировка)',
            5 => 'Высокий глянец и лак (полировка)',
            6 => 'Лак',
            7 => 'Масло',
            8 => 'Заливка смолой',
            9 => 'Масло с твердым воском',
        );
        foreach ($types_product as $k => $v) {
            if ($request['type_product'] == $k) {
                $type_product = $v;
            }
        }
        foreach ($types_cover as $k => $v) {
            if ($request['type_cover'] == $k) {
                $type_cover = $v;
            }
        }
        $this->setMeta("Заявки по покраске");
        $this->set(compact('request', 'request_id', 'type_cover', 'type_product'));
    }

    public function jalousieAction() {
        $request_id = $this->getRequestID();
        $request = R::getRow("SELECT `somej`.* FROM `somej` WHERE `somej`.`id` = ?", [$request_id]);
        $price = R::getRow("SELECT `jal_prices`.* FROM `jal_prices` WHERE `jal_prices`.`id` = ?", [$request['prices']]);
        if(!$request){
            throw new Exception('Страница не найдена', 404);
        }
        $this->setMeta("Заявки жалюзи");
        $this->set(compact('request', 'request_id', 'price'));
    }
}