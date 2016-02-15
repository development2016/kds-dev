<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DemographicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="demographic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'demographic_id') ?>

    <?= $form->field($model, 'nama_ketua_kampung') ?>

    <?= $form->field($model, 'no_tel') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'mukim_id') ?>

    <?php // echo $form->field($model, 'sub_base_id') ?>

    <?php // echo $form->field($model, 'cluster_id') ?>

    <?php // echo $form->field($model, 'kampung_id') ?>

    <?php // echo $form->field($model, 'bilangan_rumah') ?>

    <?php // echo $form->field($model, 'aktiviti_penduduk_kampung') ?>

    <?php // echo $form->field($model, 'jenis_kampung_id') ?>

    <?php // echo $form->field($model, 'corak_penempatan_id') ?>

    <?php // echo $form->field($model, 'jenis_perumahan_id') ?>

    <?php // echo $form->field($model, 'koordinate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
