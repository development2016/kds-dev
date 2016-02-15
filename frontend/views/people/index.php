<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
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
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                                 <div class="portlet-body flip-scroll">
                                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                                    <?php \yii\widgets\Pjax::begin(); ?>
                                    <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        'options' => [
                                                'id' => 'people_gridview',
                                                'class' => 'people_gridview',   
                                        ],
                                        'pager' => [
                                            'firstPageLabel' => 'First',
                                            'lastPageLabel' => 'Last',
                                        ],
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],
                                            'name',
                                            [
                                                'label'=>'No Kad Pengenalan',
                                                'format'=>'raw',
                                                'value' => function($data){
                                                    $no_ic = substr_replace($data->ic_no, ' XXXX', -4);
                                                    return $no_ic;
                                                }
                                                
                                            ],

                                            'states.state',
                                            'districts.district',
                                            'kampungs.kampung',

                                            [
                                                'header' => 'Tindakan',
                                                'class' => 'yii\grid\ActionColumn',
                                                'template'=>'{lihat}   {kemaskini}   {buang}',
                                                    'buttons' => [
                                                        'lihat' => function ($url, $model) {
                                                            return Html::a('<span class="btn default btn-xs red-stripe">Lihat</span>', 
                                                                    $url,['title'=> Yii::t('app','Lihat')]);

                                                        },

                                                    ],
                                                    'urlCreator' => function ($action, $model, $key, $index) {
                                                        if ($action === 'lihat') {
                                                            $url = ['people/view','id'=>$model->people_id];
                                                            return $url;
                                                        }
                                                    }
                                            ],

                                        ],
                                        'tableOptions' =>['class' => 'table table-bordered table-striped table-condensed flip-content'],
                                    ]); ?>
                                    <?php \yii\widgets\Pjax::end(); ?>
                                    <?php \yii\widgets\Pjax::begin(); ?>
                                    <?= ListView::widget([
                                            'dataProvider' => $dataProvider,
                                            'options' => [
                                                'tag' => 'div',
                                                'class' => 'mt-comments people_listview',
                                                'id' => 'people_listview',
                                                
                                            ],
                                            'itemOptions' => ['class' => 'mt-comment'],
                                            'itemView' => function ($model, $key, $index, $widget) {
                                                return '<div class="mt-comment-img"><img src="'.Yii::$app->request->baseUrl.'/images/pokok.png" /></div><div class="mt-comment-body"><div class="mt-comment-info"><span class="mt-comment-author">'.$model->name.'</span></div>
                                                <div class="mt-comment-text">'.$model->states->state.' - '.$model->districts->district.' - '.$model->kampungs->kampung.'</div>
                                                <div class="mt-comment-details"><span class="mt-comment-status mt-comment-status-approved">'.substr_replace($model->ic_no, ' XXXX', -4).'</span><ul class="mt-comment-actions"><li>'.Html::a('Lihat',['view','id'=>$model->people_id]).'</li></ul></div></div>';
                                                //return Html::a($model->name,['view','id'=>$model->people_id]);
                                            },
                                            'pager' => [
                                                'firstPageLabel' => 'first',
                                                'lastPageLabel' => 'last',
                                            ],
                                    ]) ?>
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

