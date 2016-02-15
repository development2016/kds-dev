<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PeopleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Collection';
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
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                                 <div class="portlet-body flip-scroll">
                                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                                    <?php \yii\widgets\Pjax::begin(); ?>
                                    <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        'pager' => [
                                            'firstPageLabel' => 'First',
                                            'lastPageLabel' => 'Last',
                                        ],
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],
                                            'nama',
                                            'ic_no',
                                            'mobile_no',
                                            'states.state',
                                            'districts.district',
                                            'kampungs.kampung',

                                            //['class' => 'yii\grid\ActionColumn'],
                                        ],
                                        'tableOptions' =>['class' => 'table table-bordered table-striped table-condensed flip-content'],
                                    ]); ?>
                                    <?php \yii\widgets\Pjax::end(); ?>

                                </div>
       
                            </div>
                        </div>
                        <!-- END WIDGET THUMB -->
                    </div>
                </div>




                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

