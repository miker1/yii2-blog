<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
	    'css/ionicons.min.css',
        //'css/flexslider.css',
        'css/animsition.min.css',
        'css/animate.css',
        'css/style.css',
    ];
    public $js = [
        //'js/jquery-2.1.4.min.js',
        'js/isotope.pkgd.min.js',
        //'js/jquery.flexslider.js',
        'js/smoothScroll.js',
        'js/jquery.animsition.min.js',
        'js/wow.min.js',
        'js/main.js',
        'js/smooth.js',
        //'js/comment.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
