<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-container-bg-solid page-md">
<?php $this->beginBody() ?>


        <!-- BEGIN HEADER -->
        <div class="page-header navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="clearfix">
                <!-- BEGIN BURGER TRIGGER -->
                <div class="burger-trigger">
                    <button class="menu-trigger">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/layouts/layout7/img/m_toggler.png" alt=""> </button>
                    <div class="menu-overlay menu-overlay-bg-transparent">
                        <div class="menu-overlay-content">
                            <ul class="menu-overlay-nav text-uppercase">
                                <li>
                                    <?= Html::a('Dashboard', ['site/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Kawasan Perlaksanaan', ['kawasan/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Profil', ['people/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Sukarelawan', ['volunteer/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Isu Konduit', ['issue-conduit/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Data Collection', ['user/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Pfn', ['pfn/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Manager Train', ['manager-train/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Organisasi', ['organization/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Program', ['program/index']) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-bg-overlay">
                        <button class="menu-close">&times;</button>
                    </div>
                    <!-- the overlay element -->
                </div>
                <!-- END NAV TRIGGER -->
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo Yii::$app->request->baseUrl; ?>">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/layouts/layout7/img/logo.png" alt="logo" class="logo-default" /> </a>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->

                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <div class="dropdown-user-inner">
                                    <span class="username username-hide-on-mobile"> <?= Yii::$app->user->identity->username ?> </span>
                                    <img alt="" src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/layouts/layout7/img/avatar1.jpg" /> </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                  
                                    <?= Html::a('<i class="icon-user"></i> My Profile </a>', FALSE, ['value'=>Url::to(['/user/view','id'=> Yii::$app->user->identity->id]),'id'=>'profilView']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="icon-key"></i> Keluar', ['site/logout'],['data-method'=>'post']) ?>
                   
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
 <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->



        <?= $content ?>
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner container-fluid container-lf-space">
        <p class="page-footer-copyright"><?= date('Y') ?> &copy; Cypress Diversified Sdn Bhd. ( Yii version <?= Yii::getVersion(); ?> )
        </p>
    </div>
    <div class="go2top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->

<?php $this->endBody() ?>


        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/layouts/layout7/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::$app->request->baseUrl; ?>/theme/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

</body>
</html>
<?php 

Modal::begin([
    'header' =>'Komuniti Development System',
    'id' => 'modal',
    'size' => 'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],

]);

echo "<div id='modalContent'></div>";
Modal::end();

$this->endPage() ?>
