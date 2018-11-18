<?php
namespace frontend\controllers;

use Yii;

use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionControl()
    {
        echo 11111;die;
        return $this->render('control');
    }

}
