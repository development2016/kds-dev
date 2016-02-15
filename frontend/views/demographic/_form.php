<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Demographic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="demographic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_ketua_kampung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'mukim_id')->textInput() ?>

    <?= $form->field($model, 'sub_base_id')->textInput() ?>

    <?= $form->field($model, 'cluster_id')->textInput() ?>

    <?= $form->field($model, 'kampung_id')->textInput() ?>

    <?= $form->field($model, 'bilangan_rumah')->textInput() ?>

    <?= $form->field($model, 'aktiviti_penduduk_kampung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kampung_id')->textInput() ?>

    <?= $form->field($model, 'corak_penempatan_id')->textInput() ?>

    <?= $form->field($model, 'jenis_perumahan_id')->textInput() ?>

    <?= $form->field($model, 'koordinate')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
