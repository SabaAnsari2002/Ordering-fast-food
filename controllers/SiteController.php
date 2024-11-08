<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\SignupForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            Yii::$app->session->setFlash('success', 'شما با موفقیت وارد شدید!');
            return $this->redirect(['site/index']);
        }

        return $this->render('login', ['model' => $model]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'ثبت‌نام شما با موفقیت انجام شد. حالا وارد شوید.');
            return $this->redirect(['site/login']);
        }

        return $this->render('signup', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        Yii::$app->session->setFlash('success', 'شما با موفقیت خارج شدید.');
        return $this->redirect(['site/index']);
    }
}
