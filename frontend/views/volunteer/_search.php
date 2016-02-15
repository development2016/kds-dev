<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VolunteerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="volunteer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?php // echo $form->field($model, 'kampung_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php  echo $form->field($model, 'nama') ?>

    <?php  echo $form->field($model, 'no_kp') ?>

    <?php // echo $form->field($model, 'jantina') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'tel_hp') ?>

    <?php // echo $form->field($model, 'tel_rumah') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'kerja_sukarelawan') ?>

    <?php // echo $form->field($model, 'persatuan') ?>

    <?php // echo $form->field($model, 'jawatan') ?>

    <?php // echo $form->field($model, 'tempoh') ?>

    <?php // echo $form->field($model, 'prog_kanak_kanak') ?>

    <?php // echo $form->field($model, 'prog_kemasyarakatan') ?>

    <?php // echo $form->field($model, 'prog_warga_emas') ?>

    <?php // echo $form->field($model, 'prog_oku') ?>

    <?php // echo $form->field($model, 'aktiviti_rekreasi') ?>

    <?php // echo $form->field($model, 'prog_kesihatan') ?>

    <?php // echo $form->field($model, 'prog_akademik') ?>

    <?php // echo $form->field($model, 'lain_lain') ?>

    <?php // echo $form->field($model, 'bahasa_melayu') ?>

    <?php // echo $form->field($model, 'bahasa_inggeris') ?>

    <?php // echo $form->field($model, 'bahasa_tamil') ?>

    <?php // echo $form->field($model, 'bahasa_cina') ?>

    <?php // echo $form->field($model, 'lain_lain_2') ?>

    <?php // echo $form->field($model, 'memiliki_kenderaan') ?>

    <?php // echo $form->field($model, 'bila_bila_masa') ?>

    <?php // echo $form->field($model, 'setiap_hari') ?>

    <?php // echo $form->field($model, 'cuti_am') ?>

    <?php // echo $form->field($model, 'fasilitator') ?>

    <?php // echo $form->field($model, 'fotografi') ?>

    <?php // echo $form->field($model, 'tenaga') ?>

    <?php // echo $form->field($model, 'lain_lain_3') ?>

    <?php // echo $form->field($model, 'nota_tambahan') ?>

    <?php // echo $form->field($model, 'date_enter') ?>

    <?php // echo $form->field($model, 'enter_by') ?>

    <?php // echo $form->field($model, 'mukim_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
