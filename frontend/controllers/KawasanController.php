<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LookupState;
use common\models\LookupDistrict;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
use common\models\LookupBahagian;
use common\models\LookupMukim;
use common\models\CountIsu;
use common\models\DailyCount;
use frontend\models\Volunteer;
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



    public function actionState($id)
    {
    	

    	$count_bahagian = LookupBahagian::find()->where(['state_id' => $id])->count();
	    $count_district = LookupDistrict::find()->where(['state_id' => $id])->count();
	    $count_mukim = LookupMukim::find()->where(['state_id' => $id])->count();
        $count_sub_base = LookupSubBase::find()->where(['state_id' => $id])->count();
        $count_cluster = LookupCluster::find()->where(['state_id' => $id])->count();
        $count_kampung = LookupKampung::find()->where(['state_id' => $id])->count();

        $count_isu = CountIsu::find()->where(['state_id'=>$id])->one();
        $count_profil_sah = DailyCount::find()->where(['state_id'=>$id])->one();
        $count_sukarelawan = Volunteer::find()->where(['state_id' => $id])->count();

        $connection = \Yii::$app->db;
        $count_demographic = $connection->createCommand('SELECT info_demographic.kemudahan_id,SUM(info_demographic.bilangan) AS jumlah FROM demographic 
            RIGHT JOIN info_demographic ON demographic.demographic_id = info_demographic.demographic_id 
            WHERE demographic.state_id = '.$id.' GROUP BY info_demographic.kemudahan_id');
        $count_demographic = $count_demographic->queryAll();


    	return $this->render('state',[
    		'count_bahagian' => $count_bahagian,
    		'count_district' => $count_district,
    		'count_mukim' => $count_mukim,
    		'count_sub_base' => $count_sub_base,
    		'count_cluster' => $count_cluster,
    		'count_kampung' => $count_kampung,
            'count_isu' => $count_isu,
            'count_profil_sah' => $count_profil_sah,
            'count_sukarelawan' => $count_sukarelawan,
            'count_demographic' => $count_demographic,

    	]);
    }
}