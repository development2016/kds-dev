<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->nama;

?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'email:email',
            'address',
            'ic_no',
            'mobile_no',
            'home_no',
            'no_tel_pej',
            'pendapatan',
            'pekerjaan',
            'jawatan',
            'kewarganegaraan',
            'status_perkahwinan',
            'bangsa',
            'agama',
            'jantina',
        ],
    ]) ?>

</div>
