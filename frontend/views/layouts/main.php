<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body  class="layui-layout-body">
<?php $this->beginBody() ?>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header custom-header">

        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item slide-sidebar" lay-unselect>
                <a href="javascript:;" class="icon-font"><i class="ai ai-menufold"></i></a>
            </li>
        </ul>

        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">BieJun</a>
                <dl class="layui-nav-child">
                    <dd><a href="#">帮助中心</a></dd>
                    <dd><a href="#">退出</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-side custom-admin">
        <div class="layui-side-scroll">

            <div class="custom-logo">
<!--                <img src="assets/images/logo.png" alt=""/>-->
                <h1>Admin Pro</h1>
            </div>
            <ul id="Nav" class="layui-nav layui-nav-tree">
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="layui-icon">&#xe609;</i>
                        <em>主页</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=Url::to(['/room/control'])?>">控制台</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="layui-icon">&#xe857;</i>
                        <em>组件</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="">表单</a></dd>
                        <dd>
                            <a href="javascript:;">页面</a>
                            <dl class="layui-nav-child">
                                <dd>
                                    <a href="">登录页</a>
                                </dd>
                            </dl>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="layui-icon">&#xe612;</i>
                        <em>用户</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="#">用户组</a></dd>
                        <dd><a href="#">权限配置</a></dd>
                    </dl>
                </li>
            </ul>

        </div>
    </div>

    <div class="layui-body">
        <div class="layui-tab app-container" lay-allowClose="true" lay-filter="tabs">
            <ul id="appTabs" class="layui-tab-title custom-tab"></ul>
            <div id="appTabPage" class="layui-tab-content"></div>
        </div>
    </div>

<!--    <div class="layui-footer">-->
<!--        <p>© 2018 更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>-->
<!--    </div>-->

    <div class="mobile-mask"></div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>