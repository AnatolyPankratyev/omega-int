<?php


namespace app\controllers\admin;


use app\models\admin\ServicePrices;
use RedBeanPHP\R;

class ServicesController extends AppController
{
    public function indexAction() {
        $services = R::findAll('services');

        $this->set(compact('services'));
        $this->setMeta('Услуги');
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $product = new ServicePrices();
            $data = $_POST;
            $product->load($data);
            if($product->update('services_prices', $id)){
                $product = R::load('services_prices', $id);
                R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = R::load('services_prices', $id);
        $this->setMeta("Редактирование услуги {$product->title}");
        $this->set(compact('product'));
    }

    public function viewAction() {
        $id = $this->getRequestID();
        $service = R::findOne('services', 'id = ?', [$id]);
        $content = R::findOne('services_content', 'id = ?', [$service->var_id]);
        $prices = R::findAll('services_prices', 'service_id = ?', [$service->id]);
        $this->set(compact('service', 'content', 'prices'));

    }
}