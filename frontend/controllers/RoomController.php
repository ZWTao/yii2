<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
/**
 * Room controller
 */
class RoomController extends Controller
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

        return $this->renderPartial('control');
    }

}
