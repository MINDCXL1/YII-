<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="keywords" content="今日临沂,资讯头条,临沂资讯,临沂生活,临沂吃喝玩乐,临沂新鲜事,临沂最新消息,临沂天气">
    <meta name="description" content="今日临沂网，立足临沂，提供最新最全的临沂资讯，关注民生社会资讯，提供吃喝玩乐等全方面的生活服务。今日临沂网，关注临沂人身边的新鲜事。">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script src="js/wap.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="css/swiper.min.css" >
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
   <!--  <link href="css/cate2.css" rel="stylesheet" media="screen" type="text/css"> -->
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/lypc.js"></script>
    <script type="text/javascript" src="js/koala.min.1.5.js"></script>

 
    <?= Html::csrfMetaTags() ?>
    <title>今日临沂</title>
    <?php //$this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="top mb20">
    <div class="w1024">
        <a href="http://www.lynow.cn/" target="_blank" class="top-logo fl"></a>
        <ul class="nav fr">
            <?php foreach($this->context->nav as $v): ?>
                <li><a href="<?= $v['url'] ?>" target="_blank"><?= $v['catname'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="piao" style="bottom: 50px; display: block;">
    <ul>
        <li class="icon icon_home"><a href="http://www.yii.com/" target="_blank"></a></li>
        <li class="icon icon_wx"><a href="#"><em></em><b class="code"><small></small></b></a></li>
        <li class="cur"><a href="http://www.yii.com/index.php?r=user/index" target="_blank">用户</a></li>

        

        <li class="icon icon_returntop"><a href="#"><em></em></a></li>
    </ul>
</div>

<?= $content ?>

<!--友情链接-->

<div class="footerwrap">
    <div class="footer w1024">
        <p><a href="http://www.lynow.cn/about/aboutus/" target="_blank">关于我们</a>
            <a href="http://www.lynow.cn/about/copyright/" target="_blank">版权声明</a>
            <a href="http://www.lynow.cn/about/mzsm/" target="_blank">免责声明</a>
            <a href="http://www.lynow.cn/about/ystk/" target="_blank">隐私条款</a>
            <a href="http://www.lynow.cn/about/jrwm/" target="_blank">加入我们</a>
            <a href="http://www.lynow.cn/about/hzhb/" target="_blank">合作伙伴</a>
            <a href="http://m.lynow.cn/" target="_blank">移动网站</a>
            <a href="http://www.lynow.cn/about/contactus/" target="_blank">联系我们</a></p>
        <p>今日临沂-关注<a href="http://www.lynow.cn/sitemaps.xml" target="_blank">临沂</a>人身边的新鲜事 临沂生活资讯新闻门户</p>
        <div class="bei" style=" width:230px; margin:0 auto; height: auto; height: 20px;color: #fff">
            <img src="images/beiico.png" width="20" height="20" class="fl" style="margin-right:5px;">
            <span class="fl">京公网安备37130202371693号</span></div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery.easing.js" ></script>
<script type="text/javascript">
    $(document).ready(function(){
        var kv_num = 0;
        function nextKv(){
            $(".control").attr("style","pointer-events:none");
            kv_num++;
            if(kv_num==4){kv_num=0;}
            $(".kv_pic").animate({ left:-675*kv_num},{ easing: 'easeInOutQuad', duration: 500, complete: function(){
                $(".control").attr("style","pointer-events:auto");
            }});
            $(".kv_word>ul").stop().animate({ left:-400*kv_num},{ easing: 'easeInOutQuad', duration: 800, complete: function(){}});
            $(".kv_dot ul li").removeClass("action").eq(kv_num).addClass("action");
        }
        function prevKv(){
            $(".control").attr("style","pointer-events:none");
            kv_num--;
            if(kv_num==-1){kv_num=3;}
            $(".kv_pic").animate({ left:-675*kv_num},{ easing: 'easeInOutQuad', duration: 500, complete: function(){

                $(".control").attr("style","pointer-events:auto");
            }});
            $(".kv_word>ul").stop().animate({ left:-400*kv_num},{ easing: 'easeInOutQuad', duration: 800, complete: function(){}});
        }
        $(".control .next").on("click",nextKv);
        $(".control .prev").on("click",prevKv);
        // 自动轮播
        setInterval(nextKv,3500);

    });
</script>
</body>
<style>
/*piao*/
.piao{ position:fixed; bottom: 50px; left:50%; margin-left:610px; display:none;}
.piao li a{ width:65px; height:65px; background:#fff; border:1px solid #eee;   line-height:65px; text-align:center; display:block;}
.piao li a:hover{ background:#f1f1f1;}
.piao li.icon a{ background:#ccc url(../images/piao_icon.gif) no-repeat 0 0; border-color:#eee; cursor:pointer;}
.piao li.icon_wx a{ background-position:0 0;}
.piao li.icon_returntop a{ background:#ccc url(../images/piao_icon.png) 0 -260px}
.piao .icon_wx a{ position:relative;}
.piao .icon_wx a b{ display:none; width:146px; height:146px; border:1px solid #eee; position:absolute; top:0px; left:-157px; z-index:999; background:url(../images/weixin.jpg) no-repeat center;}
.piao .icon_wx a b small{ display:block; width:10px; height:20px; background:url(../images/code_tri2.gif) no-repeat center; position:absolute;top:22px; right:-10px;}
.piao .icon_wx a:hover b{ display:block;}
.piao li.icon_home a{background:#ccc url(../images/piao_icon.png) no-repeat 0 -130px; } 
.piao li.icon_share a{ position:relative; background:#ccc url(../images/piao_icon.png) 0 -195px; width:65px; height: 65px; display: block; overflow: hidden; margin: 0; padding: 0; border-bottom: 0;}
</style>
<?php $this->endBody() ?>
</html>
