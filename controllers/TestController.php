<?php

namespace app\Controllers;

use app\libraries\Core;
use yii\base\Controller;



class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionIndexAction($somename){
        return $this->render('index', [
            'somename' => $somename
        ]);
    }
}
