<?php


namespace app\controllers\admin;


use app\models\admin\Jalousie;
use app\models\AppModel;
use RedBeanPHP\R;

class JalousieController extends AppController
{
    public function indexAction() {
        $jals = R::findAll('jal_prices');
        $sq_m_price = R::findOne('jal_sq_m_price', 'id = 1');
        $this->set(compact('jals', 'sq_m_price'));
        $this->setMeta('Жалюзийные дверцы');
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $product = new Jalousie();
            $data = $_POST;
            $product->load($data);
            if($product->update('jal_prices', $id)){
                $product = R::load('jal_prices', $id);
                R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = R::load('jal_prices', $id);
        $this->setMeta("Редактирование товара {$product->title}");
        $this->set(compact('product'));
    }

    public function sqmAction() {

    }
}