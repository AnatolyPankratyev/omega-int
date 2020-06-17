<?php


namespace app\models\admin;


use app\models\AppModel;

class ServicePrices extends AppModel
{
    public $attributes = [
        'service_id' => '',
        'title' => '',
        'measurement' => '',
        'price' => '',
    ];
}