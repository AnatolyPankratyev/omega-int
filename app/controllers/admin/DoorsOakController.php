<?php


namespace app\controllers\admin;


use app\models\admin\DoorsOak;
use app\models\AppModel;
use project\App;
use RedBeanPHP\R;

class DoorsOakController extends AppController
{
    public function indexAction()
    {
        $doors = R::findAll('doorsoak');
        $this->set(compact('doors'));
        $this->setMeta('Двери Дуб');
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $product = new DoorsOak();
            $data = $_POST;
            $product->load($data);
            if ($product->update('doorsoak', $id)) {
                $alias = AppModel::createAlias('doorsoak', 'alias', $data['title'], $id);
                $product = R::load('doorsoak', $id);
                $product->alias = $alias;
                R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = R::load('doorsoak', $id);
        $this->setMeta("Редактирование товара {$product->title}");
        $this->set(compact('product'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $uploaddir = WWW . '/img/doors/oak';

            $product = new DoorsOak();

            $uploadfile = $uploaddir . basename($_FILES['img']['name']);

            if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                echo "Файл корректен и был успешно загружен.\n";
            } else {
                echo "Возможная атака с помощью файловой загрузки!\n";
            }

            $data = $_POST;
            $product->load($data);


            if($id = $product->save('doorsoak')) {
                $alias = AppModel::createAlias('doorsoak', 'alias', $data['title'], $id);
                $p = R::load('doorsoak', $id);
                $p->alias = $alias;
                R::store($p);
                $_SESSION['success'] = 'Товар добавлен';
            }
            redirect();
        }

        $this->setMeta('Новый товар');
    }

}