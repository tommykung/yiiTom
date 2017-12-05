<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class HiController extends Controller 
{ 
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWhat() 
    {
        return $this->render('what'); 
    }

    public function actionTest() 
    {
        return $this->render('test');
    }
   
}
