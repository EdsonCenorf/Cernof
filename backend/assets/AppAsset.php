<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/sb-admin-2',
        //'css/smart_wizard_theme_arrows.css',
        'css/smart_wizard.min.css',
        'css/font-awesome.css',
        'css/smart_wizard_theme_arrows.min.css',
        'css/site.css',
    ];
    public $js = [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
        'vendor/chart.js/Chart.min.js',
        'js/demo/chart-area-demo.js',
        'js/demo/chart-pie-demo.js',
        'js/jquery.smartwizard.min.js',
        'https://code.jquery.com/jquery-3.3.1.min.js',
        'js/jquery.smartWizard.min.js',
        'js/main.js',
        
    


        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
