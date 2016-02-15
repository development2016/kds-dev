<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Organization */

$this->title = $model->org_id;
$this->params['breadcrumbs'][] = ['label' => 'Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->org_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->org_id], [
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
            'org_id',
            'org_name',
            'reg_no',
            'address',
            'postcode',
            'contact_person',
            'state_id',
            'country_id',
            'mobile_no',
            'office_no',
            'fax_no',
            'email:email',
            'sector_id',
            'field_id',
            'about_org:ntext',
            'picture',
            'date_enter',
            'enter_by',
        ],
    ]) ?>

</div>
