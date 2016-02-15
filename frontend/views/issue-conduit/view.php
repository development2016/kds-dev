<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\IssueConduit */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Issue Conduits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-conduit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->issue_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->issue_id], [
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
            'issue_id',
            'issue_code',
            'area_code',
            'date',
            'day',
            'time',
            'name',
            'no_kp',
            'no_kp_old',
            'jantina',
            'age',
            'religion',
            'race',
            'marital_status',
            'address',
            'postcode',
            'kampung_id',
            'cluster_id',
            'sub_base_id',
            'district_id',
            'state_id',
            'no_tel',
            'issue_category',
            'issue_report',
            'report_by',
            'witness_by',
            'received_by',
            'status',
            'analisis_isu',
            'cadangan',
            'date_enter',
            'enter_by',
            'kategori_oku',
            'kategori_oku_id',
            'mukim_id',
        ],
    ]) ?>

</div>
