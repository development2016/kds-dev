<?php

use miloschuman\highcharts\Highmaps;
use miloschuman\highcharts\Highcharts;

use yii\web\JsExpression;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->registerJsFile('http://code.highcharts.com/mapdata/countries/my/my-all.js', [
    'depends' => 'miloschuman\highcharts\HighchartsAsset'
]);

/* @var $this yii\web\View */

$this->title = 'Dashboard';


$default = 0;

$pulau_pinang = $perlis = $johor = $selangor = $kuala_lumpur = $putrajaya = $perak = $kedah = $kelantan = $melaka = $negeri_sembilan = $pahang = $terengganu = $sabah = $sarawak = $labuan = 0;
foreach ($data as $key => $value) {
    if ($value['state_id'] == 12) {
       $pahang = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 13) {
        $selangor = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 14) {
        $perlis = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 15) {
        $perak = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 16) {
        $kedah = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 17) {
        $kelantan = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 18) {
        $terengganu = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 19) {
        $melaka = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 20) {
        $sabah = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 21) {
        $sarawak = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 22) {
        $johor = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 23) {
        $pulau_pinang = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 24) {
        $negeri_sembilan = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 25) {
        $labuan = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 26) {
        $kuala_lumpur = (int)$value['total_by_state'];
    }
    if ($value['state_id'] == 27) {
        $putrajaya = (int)$value['total_by_state'];
    }
}


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
                            <?php

                                echo Highmaps::widget([
                                    'id' => 'mapschart',
                                    'options' => [
                                        'title' => [
                                            'text' => 'Malaysia',
                                        ],
                                        'chart' => [

                                            'height' => 600
                                        ],
                                        'mapNavigation' => [
                                            'enabled' => true,
                                            'buttonOptions' => [
                                                'verticalAlign' => 'bottom',
                                            ],

                                        ],
                                        'mapNavigation' => [
                                            'enabled' => false,
                                            'enableDoubleClickZoomTo' => false,
                                        ],


                                        'colorAxis' => [
                                            'min' => 0,
                                        ],
                                        'series' => [
                                            [

                                                    'data' => [
                                                        ['hc-key' => 'my-pg', 'value' => $pulau_pinang],
                                                        ['hc-key' => 'my-pl', 'value' => $perlis ],
                                                        ['hc-key' => 'my-jh', 'value' => $johor],
                                                        ['hc-key' => 'my-sl', 'value' => $selangor],
                                                        ['hc-key' => 'my-kl', 'value' => $kuala_lumpur],
                                                        ['hc-key' => 'my-pj', 'value' => $putrajaya],
                                                        ['hc-key' => 'my-pk', 'value' => $perak],
                                                        ['hc-key' => 'my-kh', 'value' => $kedah],
                                                        ['hc-key' => 'my-kn', 'value' => $kelantan],
                                                        ['hc-key' => 'my-me', 'value' => $melaka],
                                                        ['hc-key' => 'my-ns', 'value' => $negeri_sembilan],
                                                        ['hc-key' => 'my-ph', 'value' => $pahang],
                                                        ['hc-key' => 'my-te', 'value' => $terengganu],
                                                        ['hc-key' => 'my-sa', 'value' => $sabah],
                                                        ['hc-key' => 'my-sk', 'value' => $sarawak],
                                                        ['hc-key' => 'my-la', 'value' => $labuan],
                                                        [ 'hc-key'=> '', 'value'=> $default],
                                                    ],

                                                'mapData' => new JsExpression('Highcharts.maps["countries/my/my-all"]'),
                                                'joinBy' => 'hc-key',
                                                'name' => 'Random data',
                                                'states' => [
                                                    'hover' => [
                                                        'color' => '#BADA55',
                                                    ]
                                                ],
                                                'dataLabels' => [
                                                    'enabled' => true,
                                                    'format' => '{point.name}',
                                                ]
                                            ]
                                        ]
                                    ]
                                ]);

                            ?>

                            <?php

                                echo Highcharts::widget([
                                   'id' => 'barchart',
                                   'options' => [
                                      'chart' => ['type'=>'column'],
                                      'title' => ['text' => 'Data Maklumat Profil Cypress Diversified'],
                                      'xAxis' => [
                                         'categories' => ['Pahang', 'Terengganu', 'Perlis', 'Perak', 'Johor', 'Sarawak']
                                      ],
                                      'yAxis' => [
                                         'title' => ['text' => 'Jumlah']
                                      ],
                                        'plotOptions' => [
                                          'column' => [
                                  
                                            'dataLabels' => [
                                              'enabled' => true,
                                              'rotation' => -45,
                                              'y' => -30,
                                              'style' => [
                                                'fontSize' => '15px',
                                                'fontWeight' => 'normal',
                                              ],
                                              'align' => 'center',],
                                              'colorByPoint' => true


                                            ]
                                        ],

                                      'series' => [
                                         ['name' => 'Data Profil', 'data' => [$pahang, $terengganu, $perlis, $perak, $johor, $sarawak]],
                                      ]
                                   ]
                                ]);

                             ?>

       
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