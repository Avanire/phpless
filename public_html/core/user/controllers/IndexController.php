<?php

namespace core\user\controllers;

use core\base\controllers\BaseController;
use core\admin\models\Model;

class IndexController extends BaseController
{


    protected function inputData()
    {
        $db = Model::instance();

        $query = "SELECT * FROM article";

        $res = $db->query($query);

        $rez = $res[0]['name'];

        exit();

    }

    protected function outputData()
    {

    }
}