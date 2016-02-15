<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url(<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/pages/img/login/bg1.jpg)">
                        <img class="login-logo" src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/pages/img/login/logo.png" /> </div>
                </div>
                <div class="col-md-6 login-container bs-reset">
                    <div class="login-content">
                        <h1>Kds</h1>
                        <p> Program BIMBING merupakan program yang dibangunkan khas untuk membentuk anak-anak yang masih berada di bangku sekolah rendah menjadi manusia yang mempunyai keperibadian yang tinggi. </p>
                        <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'login-form']]); ?>
                            <?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
                      
                            <div class="row">
                                <div class="col-xs-6">
                                   <?= Html::activeTextInput($model,'username',['class'=>'form-control form-control-solid placeholder-no-fix form-group','placeholder'=>'Nama Pengguna']); ?>                            
                                   
                                </div>
                                <div class="col-xs-6">
                                    <?= Html::activePasswordInput($model,'password',['class'=>'form-control form-control-solid placeholder-no-fix form-group','placeholder'=>'Kata Laluan']); ?>
                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                               <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Lupa Kata Laluan?</a>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
     
                                    <?= Html::submitButton('Sign In', ['class' => 'btn blue', 'name' => 'login-button']) ?>

                                    
                                </div>
                            </div>

                        <?php ActiveForm::end(); ?>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <?php $form = ActiveForm::begin(['id' => 'reset-password-form','options' => ['class' => 'forget-form']]); ?>
                        
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn grey btn-default">Back</button>
                                <?= Html::submitButton('Submit', ['class' => 'btn blue btn-success uppercase pull-right']) ?>
                               
                            </div>
                        
                        <?php ActiveForm::end(); ?>
                        <!-- END FORGOT PASSWORD FORM -->

                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Cypress Diversified Sdn Bhd <?= date('Y') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>