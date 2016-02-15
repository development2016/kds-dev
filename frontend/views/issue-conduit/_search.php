<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IssueConduitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-conduit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'issue_code') ?>


    <?php // echo $form->field($model, 'time') ?>

    <?php echo $form->field($model, 'name') ?>

    <?php echo $form->field($model, 'no_kp') ?>

    <?php // echo $form->field($model, 'no_kp_old') ?>

    <?php // echo $form->field($model, 'jantina') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'race') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'postcode') ?>

    <?php // echo $form->field($model, 'kampung_id') ?>

    <?php // echo $form->field($model, 'cluster_id') ?>

    <?php // echo $form->field($model, 'sub_base_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'no_tel') ?>

    <?php // echo $form->field($model, 'issue_category') ?>

    <?php // echo $form->field($model, 'issue_report') ?>

    <?php // echo $form->field($model, 'report_by') ?>

    <?php // echo $form->field($model, 'witness_by') ?>

    <?php // echo $form->field($model, 'received_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'analisis_isu') ?>

    <?php // echo $form->field($model, 'cadangan') ?>

    <?php // echo $form->field($model, 'date_enter') ?>

    <?php // echo $form->field($model, 'enter_by') ?>

    <?php // echo $form->field($model, 'kategori_oku') ?>

    <?php // echo $form->field($model, 'kategori_oku_id') ?>

    <?php // echo $form->field($model, 'mukim_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
