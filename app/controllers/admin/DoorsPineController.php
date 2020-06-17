<?php
namespace app\controllers\admin;


use app\models\admin\DoorsPine;
use app\models\AppModel;
use RedBeanPHP\R;

class DoorsPineController extends AppController
{
    public function indexAction() {
        $doors = R::findAll('doorspine');
        $this->set(compact('doors'));
        $this->setMeta('Двери Сосна');
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $product = new DoorsPine();
            $data = $_POST;
            $product->load($data);
            if($product->update('doorspine', $id)){
                $alias = AppModel::createAlias('doorspine', 'alias', $data['title'], $id);
                $product = R::load('doorspine', $id);
                $product->alias = $alias;
                R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = R::load('doorspine', $id);
        $this->setMeta("Редактирование товара {$product->title}");
        $this->set(compact('product'));
    }

}