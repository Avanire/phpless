<?php

namespace core\user\controllers;

use core\base\controllers\BaseController;
use core\admin\models\Model;

class IndexController extends BaseController
{


    protected function inputData()
    {
        $db = Model::instance();

        $res = $db->get();

        exit();

    }

    protected function outputData()
    {

    }
}