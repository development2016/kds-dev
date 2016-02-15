<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Volunteer */

$this->title = $model->volunteer_id;
$this->params['breadcrumbs'][] = ['label' => 'Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->volunteer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->volunteer_id], [
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
            'volunteer_id',
            'state_id',
            'district_id',
            'sub_base_id',
            'cluster_id',
            'kampung_id',
            'date',
            'day',
            'time',
            'nama',
            'no_kp',
            'jantina',
            'alamat',
            'poskod',
            'tel_hp',
            'tel_rumah',
            'email:email',
            'kerja_sukarelawan',
            'persatuan',
            'jawatan',
            'tempoh',
            'prog_kanak_kanak',
            'prog_kemasyarakatan',
            'prog_warga_emas',
            'prog_oku',
            'aktiviti_rekreasi',
            'prog_kesihatan',
            'prog_akademik',
            'lain_lain',
            'bahasa_melayu',
            'bahasa_inggeris',
            'bahasa_tamil',
            'bahasa_cina',
            'lain_lain_2',
            'memiliki_kenderaan',
            'bila_bila_masa',
            'setiap_hari',
            'cuti_am',
            'fasilitator',
            'fotografi',
            'tenaga',
            'lain_lain_3',
            'nota_tambahan',
            'date_enter',
            'enter_by',
            'mukim_id',
        ],
    ]) ?>

</div>
