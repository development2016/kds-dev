<?php

namespace frontend\controllers;

use Yii;
use frontend\models\People;
use frontend\models\PeopleSearch;
use common\models\Wife;
use common\models\Tanggungan;
use common\models\Answer;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * PeopleController implements the CRUD actions for People model.
 */
class PeopleController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),

            ],
        ];
    }

    /**
     * Lists all People models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PeopleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single People model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $pasangan = Wife::find()->where(['people_id'=>$id])->all();
        $tangunggan = Tanggungan::find()->where(['people_id'=>$id])->all();
        $answer = new ActiveDataProvider([
            'query' => Answer::find()->where(['people_id'=>$id]),
            'pagination' => ['pageSize'=>52],
        ]);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'pasangan' => $pasangan,
            'tangunggan' => $tangunggan,
            'answer' => $answer,
        ]);
    }

    /**
     * Finds the People model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return People the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = People::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
