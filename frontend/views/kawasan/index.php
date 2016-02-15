<?php


use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Kawasan Perlaksanaan';


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

                    <?php foreach ($data as $key => $value) {  ?>

                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                <h4 class="widget-thumb-heading"><?php echo $value['state'] ?></h4>
                                <div class="widget-thumb-wrap">
                                    <a href="" style="text-decoration:none;">
                                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/negeri/<?php echo $value['flag'] ?>"  class="widget-thumb-icon">
                                        <div class="widget-thumb-body">
                                            <span class="widget-thumb-subtitle">Jumlah</span>
                                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $value['total_by_state'] ?>">0</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>

                    <?php } ?>

                </div>



                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->