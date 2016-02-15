<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DemographicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Demographics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demographic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Demographic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'demographic_id',
            'nama_ketua_kampung',
            'no_tel',
            'state_id',
            'district_id',
            // 'mukim_id',
            // 'sub_base_id',
            // 'cluster_id',
            // 'kampung_id',
            // 'bilangan_rumah',
            // 'aktiviti_penduduk_kampung',
            // 'jenis_kampung_id',
            // 'corak_penempatan_id',
            // 'jenis_perumahan_id',
            // 'koordinate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
