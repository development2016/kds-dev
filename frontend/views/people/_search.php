<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PeopleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="people-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'ic_no') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'race') ?>

    <?php // echo $form->field($model, 'name_nick') ?>

    <?php // echo $form->field($model, 'ic_no_old') ?>

    <?php // echo $form->field($model, 'current_address') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'sub_base_id') ?>

    <?php // echo $form->field($model, 'cluster_id') ?>

    <?php // echo $form->field($model, 'kampung_id') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'citizen') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'no_of_children') ?>

    <?php // echo $form->field($model, 'profession_status') ?>

    <?php // echo $form->field($model, 'profession') ?>

    <?php // echo $form->field($model, 'job_position') ?>

    <?php // echo $form->field($model, 'job_else') ?>

    <?php // echo $form->field($model, 'income') ?>

    <?php // echo $form->field($model, 'spending') ?>

    <?php // echo $form->field($model, 'mobile_no') ?>

    <?php // echo $form->field($model, 'home_no') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'penghulu') ?>

    <?php // echo $form->field($model, 'local_champion') ?>

    <?php // echo $form->field($model, 'volunteer') ?>

    <?php // echo $form->field($model, 'micro_worker') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'enter_date') ?>

    <?php // echo $form->field($model, 'enter_by') ?>

    <?php // echo $form->field($model, 'data_status') ?>

    <?php // echo $form->field($model, 'verified_date') ?>

    <?php // echo $form->field($model, 'verified_by') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'mukim') ?>

    <?php // echo $form->field($model, 'tarikh_soal_selidik') ?>

    <?php // echo $form->field($model, 'nota') ?>

    <?php // echo $form->field($model, 'ruang_cadangan') ?>

    <?php // echo $form->field($model, 'oku') ?>

    <?php // echo $form->field($model, 'tanggungan_oku') ?>

    <?php // echo $form->field($model, 'mukim_id') ?>

    <?php // echo $form->field($model, 'bahagian_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
