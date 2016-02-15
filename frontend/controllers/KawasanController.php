<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class KawasanController extends Controller
{


    public function actionIndex()
    {

        $connection = \Yii::$app->db;
        $sql = $connection->createCommand("SELECT * FROM  lookup_state RIGHT JOIN daily_count ON lookup_state.state_id = daily_count.state_id WHERE lookup_state.kawasan_perlaksanaan = 'Ya'");
        $data = $sql->queryAll();
        return $this->render('index',['data'=>$data]);
    }
}