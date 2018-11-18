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
//        'css/site.css',
        'assets/layui/css/layui.css',
        'assets/layui/css/view.css',
        'assets/layui/css/admin.css',
        'assets/layui/css/login.css',
        'assets/layui/css/layui.mobile.css',
    ];
    public $js = [
        'assets/layui/layui.js',
        'assets/layui/index.js',
        'assets/layui/home.js',
    ];
    public $depends = [
    ];
}
