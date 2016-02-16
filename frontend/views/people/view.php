<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PeopleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profil';
?>
        <!-- BEGIN CONTAINER -->
        <div class="page-container page-content-inner page-container-bg-solid">
            <!-- BEGIN BREADCRUMBS -->
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <h2 class="breadcrumbs-title"><?= Html::encode($this->title) ?></h2>
                    <ol class="breadcrumbs-list">
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            <!-- BEGIN CONTENT -->
            <div class="container-fluid container-lf-space">


                <div class="row widget-row">
                    <div class="col-md-12">


            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet bordered">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/pokok_big.png" class="img-responsive" alt=""> </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"><?= $model->name ?></div>
                        <div class="profile-usertitle-job"><?= substr_replace($model->ic_no, ' XXXX', -4)?></div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="tabbable nav">
                            <li class="active">
                                <a data-toggle="tab" href="#tab_1-1">
                                    <i class="icon-home"></i> Overview </a>
                            </li>
                            
                        </ul>

                    </div>

                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
                <!-- PORTLET MAIN -->
                <div class="portlet light bordered">

                    <div>
                        <h4 class="profile-desc-title">Contact</h4>

                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-mobile"></i>
                            <a href="#"><?= $model->mobile_no?></a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-phone"></i>
                            <a href="#"><?= $model->home_no ?></a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-envelope"></i>
                            <a href="#"><?= $model->email ?></a>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">

                <div class="tab-content">
                    <div id="tab_1-1" class="tab-pane active">
                                                <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Overview</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active">


                                                    <table class="table table-light">
                                                        <tbody>
                                                            <tr>
                                                                <td width="400px">Alamat</td>
                                                                <td width="600px"><b><?= $model->address ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Poskod</td>
                                                                <td><b><?= $model->postcode ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kawasan</td>
                                                                <td><b><?= $model->states->state ?> - <?= $model->districts->district ?> - <?= $model->kampungs->kampung ?></b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                               
                                                    <br>
                                                    
                                                    <span class="caption-subject font-blue-madison bold uppercase">Lain - lain</span>
                                                    <br>
                                                    <hr>
                                                    <table class="table table-light">
                                                        <tbody>
                                                            <tr>
                                                                <td width="400px">Jantina</td>
                                                                <td width="600px"><b><?= $model->gender ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tarikh Lahir</td>
                                                                <td><b><?= $model->dob ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bangsa</td>
                                                                <td><b><?= $model->race ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Agama</td>
                                                                <td><b><?= $model->religion ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Warga Negara</td>
                                                                <td><b><?= $model->citizen ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Pekerjaan</td>
                                                                <td><b><?= $model->profession_status ?> - <?= $model->profession ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Perkahwinan</td>
                                                                <td><b><?= $model->marital_status ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Income / Spending</td>
                                                                <td><b><?= $model->income ?> - <?= $model->spending?></b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="portlet box blue-madison">
                                                        <div class="portlet-title">
                                                            <div class="caption uppercase">
                                                               Pasangan</div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body" style="display: none;">
                                                            <table class="table table-light">
                                                                <tbody>
                                                                    <?php foreach ($pasangan as $key => $value) { ?>
                                                                    <tr>
                                                                        <td width="400px">Nama</td>
                                                                        <td width="600px"><b><?= $value['wife_name'] ?></b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No Kad Pengenalan</td>
                                                                        <td><b><?= $value['wife_ic'] ?></b></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="portlet box blue-madison">
                                                        <div class="portlet-title">
                                                            <div class="caption uppercase">
                                                               Tangunggan</div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body" style="display: none;">
                                                            <table class="table table-light">
                                                                <tbody>
                                                                    <?php foreach ($tangunggan as $key => $value) { ?>
                                                                    <tr>
                                                                        <td width="400px">Nama</td>
                                                                        <td width="600px"><b><?= $value['nama_tanggungan'] ?></b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No Kad Pengenalan</td>
                                                                        <td><b><?= $value['no_ic_tanggungan'] ?></b></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>


                                                    <div class="portlet box blue-madison">
                                                        <div class="portlet-title">
                                                            <div class="caption uppercase">
                                                               Maklumat Tambahan</div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body" style="display: none;">
                                                            <?= GridView::widget([
                                                                'dataProvider' => $answer,

                                                                'columns' => [
                                                                    ['class' => 'yii\grid\SerialColumn'],
                                          
                                                                    'answer',

                                                                ],
                                                            ]); ?>
                                                        </div>
                                                    </div>
                                                  
        
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->


     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- END PROFILE CONTENT -->



                    </div>
                </div>




                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->


