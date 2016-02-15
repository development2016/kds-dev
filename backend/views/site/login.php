<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/pages/img/logo-big-white.png" style="height: 17px;" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'login-form']]); ?>
            
                <div class="form-title">
                    <span class="form-title">Welcome.</span>
                    <span class="form-subtitle">Please login.</span>
                </div>
                <?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <?= Html::activeTextInput($model,'username',['class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>'Nama Pengguna']); ?> 
                </div> 

                <div class="form-group">
                	<?= Html::activePasswordInput($model,'password',['class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>'Kata Laluan']); ?>
                </div>

                <div class="form-actions">
                	<?= Html::submitButton('Sign In', ['class' => 'btn blue btn-block uppercase', 'name' => 'login-button']) ?>

                </div>


            <?php ActiveForm::end(); ?>
            <!-- END LOGIN FORM -->


        </div>
        <div class="copyright hide"> <?= date('Y') ?> © Cypress Diversified Sdn Bhd </div>