<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'theme/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'theme/assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'theme/assets/global/plugins/uniform/css/uniform.default.css',
        'theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'theme/assets/global/plugins/morris/morris.css',
        'theme/assets/global/plugins/mapplic/mapplic/mapplic.css',
        'theme/assets/global/css/components-md.min.css',
        'theme/assets/global/css/plugins-md.min.css',
        'theme/assets/layouts/layout7/css/layout.min.css',
        'theme/assets/layouts/layout7/css/custom.min.css',
        'theme/assets/pages/css/profile.min.css',
    ];
    public $js = [
        'js/extra.js',
        'js/modal.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
