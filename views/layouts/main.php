<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<body>
<?php $this->beginBody() ?>
<!DOCTYPE html>

<html lang="zh-CN">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="revised" content="Ningxia Seasons, 2015/8/13/" />

<!-- 定义页面的最新版本 -->

<meta name="description" content="网站简介" />

<!-- 网站简介 -->

<meta name="keywords" content="搜索关键字，以半角英文逗号隔开" />

<!-- 搜索关键字 -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>个人中心</title>





<!-- CSS公共部分 开始 -->

<link href="css/bootstrap.min.css" rel="stylesheet">

<!--[if lt IE 9]>

      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

<link href="css/style.css" rel="stylesheet">

<!-- CSS公共部分 结束 -->



<link href="css/crowdfunding.css" rel="stylesheet">



</head>

<body>

<!-- top + banner 开始 -->

<div class="container-fluid cfh_top">

  <div class="container"> 首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;官方咨询电话：***-***-****

    <ul class="list-inline">

      <li><a href="index.html" target="_self">某某某网</a></li>

      <li><a href="https://nxseason.taobao.com/" target="_blank">某某某网</a></li>

      <li id="register" onMouseMove="login_but_bg(1)" onMouseOut="login_but_bg(2)"><a href="" target="_blank">&nbsp;注册&nbsp;</a></li>

      <li id="login" onMouseMove="login_but_bg(3)" onMouseOut="login_but_bg(4)"><a href="member_center.html" target="_blank">&nbsp;登录&nbsp;</a></li>

    </ul>

  </div>

</div>

<div class="wrap">


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<div class="container-fluid cfh_bottom">

  <div class="container">

    <div class="cfh_bottom_qsss">

      <dl>

        <dt>轻松上手</dt>

        <dd><a href="" target="_blank">如何投资</a></dd>

        <dd><a href="" target="_blank">如何融资</a></dd>

        <dd><a href="" target="_blank">平台协议下载</a></dd>

        <dd><a href="" target="_blank">关于我们</a></dd>

      </dl>

    </div>

    <div class="cfh_bottom_aboutours">

      <dl>

        <dt>关于我们</dt>

        <dd><a href="" target="_blank">股东背景</a></dd>

        <dd><a href="" target="_blank">某某某财富团队</a></dd>

        <dd><a href="" target="_blank">法律服务</a></dd>

        <dd><a href="" target="_blank">招贤纳士</a></dd>

      </dl>

    </div>

    <div class="cfh_bottom_callme">

      <dl>

        <dt class="cfh_bottom_call_me"><span class="glyphicon glyphicon-earphone"></span>&nbsp;***-***-****</a></dt>

        <dd>投资人服务邮箱：<a href="mailto:38839364@qq.com" target="_blank">38839364@qq.com</a></dd>

        <dd>创业者服务邮箱：<a href="mailto:38839364@qq.com" target="_blank">38839364@qq.com</a></dd>

        <dd>公司地址：宁夏银川市兴庆区某某街道9527号</dd>

      </dl>

    </div>

    <div class="cfh_bottom_QRcode"> <img src="images/bottom_QRcode.png"> <div class="phone">

    <span class="cfh_bottom_Iphone"><img src="images/cfh_bottom_IphoneICO.png"><font>APP Store</font></span><img class="cfh_bottom_IphoneICO_last" src="images/cfh_bottom_AndroidICO_1.png"><br>

    <span class="cfh_bottom_Iphone"><img src="images/cfh_bottom_AndroidICO.png"><font>Android</font></span><img class="cfh_bottom_AndroidICO_last" src="images/cfh_bottom_IphoneICO_2.png"></div></div>

  </div>

  <div class="box50"></div>

</div>

<div class="container-fluid background_color545454">

  <div class="container text-center"> © 2015 某某某 All rights reserved | 宁夏某某某金融科技服务有限公司 | 宁ICP备14000922号-2 </div>

</div>

<img id="back_top_jt" class="back_top" onMouseMove="float_call_me(7)" onMouseOut="float_call_me(8)" src="images/back_top_jt.png">

<span class="back_top_jt_span">返回顶部</span>

<img id="back_top_wx" class="back_top2" onMouseMove="float_call_me(5)" onMouseOut="float_call_me(6)" src="images/back_top_wx.png">

<span class="back_top_wx_span"><img src="images/bottom_QRcode.png"></span>

<a href="tencent://message/?uin=666666&Site=&Menu=yes"><img id="back_top_qq" class="back_top3" onMouseMove="float_call_me(3)" onMouseOut="float_call_me(4)" src="images/back_top_qq.png"></a>

<span class="back_top_qq_span"><font class="glyphicon glyphicon-hand-right">&nbsp;QQ咨询热线</font></span>

<img id="back_top_call" class="back_top4" onMouseMove="float_call_me(1)" onMouseOut="float_call_me(2)" src="images/back_top_call.png">

<span class="back_top_call_span"><font class="glyphicon glyphicon-phone-alt">&nbsp;***-***-****</font></span>

<!-- 版权 结束 -->



<!-- 结束 -->

<!-- JS公共部分 开始 -->

<script src="js/jquery-2.1.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/basics.js"></script>

<!-- JS公共部分 结束 -->

<script src="js/crowdfunding.js"></script>

</body>

</html>

