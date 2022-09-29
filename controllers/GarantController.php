<?php

namespace app\controllers;

use app\models\ArmLoginForm;
use app\models\LoginForm;
use Yii;
use yii\web\Controller;

class GarantController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model=new LoginForm();
        $arm=new ArmLoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->goBack();

        }
        if ($arm->load(Yii::$app->request->post()) && $arm->login()) {
            return $this->goBack();
        }
        return $this->render('login',compact('model','arm'));
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}