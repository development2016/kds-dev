<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Demographic */

$this->title = $model->demographic_id;
$this->params['breadcrumbs'][] = ['label' => 'Demographics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demographic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->demographic_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->demographic_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'demographic_id',
            'nama_ketua_kampung',
            'no_tel',
            'state_id',
            'district_id',
            'mukim_id',
            'sub_base_id',
            'cluster_id',
            'kampung_id',
            'bilangan_rumah',
            'aktiviti_penduduk_kampung',
            'jenis_kampung_id',
            'corak_penempatan_id',
            'jenis_perumahan_id',
            'koordinate',
        ],
    ]) ?>

</div>
