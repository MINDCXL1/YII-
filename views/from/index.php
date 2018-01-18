<?php
use yii\helpers\Url;
?>
<!--top end--> 

<div class="w1024 block mb20">

    <div class="w360 fl"> 

        <div class="new fl w360">

            <div class="m-title"><h2 class="sty-red"><strong>最新</strong><i>·&nbsp;资讯</i></h2></div>

            <ul class="globalHot">
<?php
            for($i=0;$i<3;$i++)
            {
                echo "
                <li class='dotLineBot'>

                    <h2><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']]).
                    ">"
                    .$newslist[$i]['title'].
                    "</a></h2><p>"
                    .$newslist[$i]['description'].
                    "..</p></li>";
            }
?>
            </ul>

        </div>

        <!--最新资讯/首页头条--> 

        <div class="w360 fl"> 

            <div class="mod-con">
<?php
            for($i=3;$i<4;$i++)
            {
                echo "
                <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']]).">".$newslist[$i]['title']."</a></h3>
";
            }
?>
                                        <ul class="ulist">
<?php
            for($i=4;$i<7;$i++)
            {
                echo "
                                                    <li><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']]).">".$newslist[$i]['title']."</a></li>
";
            }
?>

                                                 </ul>

            </div>
                        <div class="mod-con">
<?php
            for($i=7;$i<8;$i++)
            {
                echo "
                <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']]).">".$newslist[$i]['title']."</a></h3>
";
            }
?>
                                        <ul class="ulist">
<?php
            for($i=8;$i<11;$i++)
            {
                echo "
                                                    <li><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']]).">".$newslist[$i]['title']."</a></li>
";
            }
?>

                                                 </ul>

            </div>


            
            <div class="more"><a href="http://www.lynow.cn/yule/" target="_blank"><img src="images/img-12.gif" width="383" height="18" border="0" alt="今日临沂更多精彩"></a></div>

        </div> 

        <!--首页小头条-->

        

    </div>

    <!--模块1左侧end-->    

    <div class="w630 fr">

        <!-- 模块1焦点图代码开始 -->

        <div id="fsD1" class="focus mb20">

            <div id="D1pic1" class="fPic">

                         <?php
            for($i=8;$i<12;$i++)
            {
                echo " 

                <div class=\"fcon\" style=\"display: none;\">

                    <a target=\"_blank\" href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." style=\"opacity: 1; \"></a>

                    <span class=\"shadow\"><a target=\"_blank\" href=".Url::to(['from/content','id'=>$newslist[$i]['id']]).">".$newslist[$i]['title']."</a></span>

                </div>
";
            }
?>

                           

            </div>

            <div class="fbg">  

            <div class="D1fBt" id="D1fBt">  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>3</i></a>  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>  

            </div>  

            </div>  

            <span class="prev"></span>   

            <span class="next"></span>    

        </div>  

        <script type="text/javascript">

            Qfast.add('widgets', { path: "http://www.lynow.cn/statics/newly/terminator2.2.min.js", type: "js", requires: ['fx'] });  

            Qfast(false, 'widgets', function () {

                K.tabs({

                    id: 'fsD1',   //焦点图包裹id  

                    conId: "D1pic1",  //** 大图域包裹id  

                    tabId:"D1fBt",  

                    tabTn:"a",

                    conCn: '.fcon', //** 大图域配置class       

                    auto: 1,   //自动播放 1或0

                    effect: 'fade',   //效果配置

                    eType: 'click', //** 鼠标事件

                    pageBt:true,//是否有按钮切换页码

                    bns: ['.prev', '.next'],//** 前后按钮配置class                          

                    interval: 3000  //** 停顿时间  

                }) 

            })  

        </script>

        <!-- banner代码结束 -->

        

        <div class="630">

            <div class="focus-list fl w240">
                         <?php
            for($i=3;$i<6;$i++)
            {
                echo " 
                                        <dl>

                    <dt><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']."></a></dt>

                    <dd><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])." >".$newslist[$i]['title']."</a></dd>

                </dl>
";
            }
?>
                           
                                    </div>

            <!--模块1小幻灯--> 

            <div class="w360 fr">

                <div class="m-title dujia-title"><h2 class="sty-red"><strong>临沂</strong><i></i></h2></div>

                <div class="w360">
                         <?php
            for($i=0;$i<3;$i++)
            {
                echo " 
                                                    <div class=\"news-title title\">

                        <span><i class=\"dj\">独家</i><a href=".Url::to(['from/content','id'=>$linyi[$i]['id']]).">".$linyi[$i]['title']."</a></span>

                        <div class=\"clearfloat\"></div>

                        <div class=\"zy zy_fk_dj\">".$linyi[$i]['description']."...</div>

                    </div>
";
            }
?>
                                    

                                 

                </div>

            </div>

            <!--临沂独家--> 

        </div>

        <!--模块1右侧下方--> 

    </div>

    <!--模块1右侧end-->

</div>

<!--模块1end-->

<div class="w1024 yule mb20">

    <div class="column-title-home mb20">

        <div class="column-title-border">

            <h2><a href="http://www.yii.com/index.php?r=from/linyi" target="_blank">临沂</a><span class="cname">LINYI</span></h2>
             <div class="sub-class">       
                         <?php
            for($i=0;$i<3;$i++)
            {
                echo " 
                                                      
                             <a href=".$linyi2[$i]['url'].">".$linyi2[$i]['catname']."</a>
";
            }
?>
            </div>

            <span class="more"><a href="http://www.yii.com/index.php?r=from/linyi" target="_blank">更多</a></span>

        </div>

    </div>

    <!--标题-->

    <div class="w1024">

        <div class="w360 fl amuse-focus">

            <div class="m-title tansuo-title"><h2 class="sty-red"><strong>城</strong><i></i></h2></div>
<?php
            for($i=4;$i<5;$i++)
            {
                echo " 
                <dl class=\"mb20\">

                <dt><a href=".Url::to(['from/content','id'=>$linyi[$i]['id']])."><img src=".$linyi[$i]['thumb']."></a></dt> 

                <dd><a href=".Url::to(['from/content','id'=>$linyi[$i]['id']]).">".$linyi[$i]['title']."</a></dd>

            </dl>
";
            }
?>
<?php
            for($i=4;$i<6;$i++)
            {
                echo " 
            <div class=\"news-title title\">

                 <span><a href=".Url::to(['from/content','id'=>$linyi[$i]['id']]).">".$linyi[$i]['title']."</a></span>

                 <div class=\"clearfloat\"></div>

                 <div class=\"zy zy_fk_dj\">".$linyi[$i]['description']."...</div>

            </div> 
";
            }
?>
                        
                                </div>

        <!--城事儿--> 

        <div class="w630 fr">

            <div class="qiwen w630 mb20">

                <div class="yishi-title m-title"><h2 class="sty-red"><strong>品</strong><i></i></h2></div>

                <ul>
<?php
            for($i=6;$i<9;$i++)
            {
                echo " 
                    <li> 

                        <h2><a href=".Url::to(['from/content','id'=>$linyi[$i]['id']]).">".$linyi[$i]['title']."</a></h2>

                        <p>".$linyi[$i]['description']."... </p> 

                    </li>
";
            }
?>
                                 

                </ul>

            </div>

            <!--品味儿--> 

            <div class="qiwen wenhua w630">

                <div class="jiemi-title m-title"><h2 class="sty-red"><strong>口</strong><i></i></h2></div>

                <ul>
<?php
            for($i=9;$i<11;$i++)
            {
                echo " 
                    <li> 

                        <h2><a href=".Url::to(['from/content','id'=>$linyi[$i]['id']]).">".$linyi[$i]['title']."</a></h2>

                        <p>".$linyi[$i]['description']."... </p> 

                    </li>
";
            }
?>
                                                </ul>

            </div>

            <!--口碑儿-->

        </div>

        <!--临沂内容右侧--> 

    </div>

    <!--临沂内容--> 

</div>
<div class="w1024 yule mb20">

    <div class="column-title-home mb20">

        <div class="column-title-border">

            <h2><a href="http://www.yii.com/index.php?r=from/yule" target="_blank">娱乐</a><span class="cname">AMUSE</span></h2>
             <div class="sub-class">       
                         <?php
            for($i=0;$i<4;$i++)
            {
                echo " 
                                                      
                             <a href=".$yule2[$i]['url'].">".$yule2[$i]['catname']."</a>
";
            }
?>
            </div>

            <span class="more"><a href="http://www.yii.com/index.php?r=from/yule" target="_blank">更多</a></span>

        </div>

    </div>

    <!--标题-->

    <div class="w1024">

        <div class="w360 fl amuse-focus">

        
<?php
            for($i=8;$i<9;$i++)
            {
                echo " 
                <dl class=\"mb20\">

                <dt><a href=".Url::to(['from/content','id'=>$yule[$i]['id']])."><img src=".$yule[$i]['thumb']."></a></dt> 

                <dd><a href=".Url::to(['from/content','id'=>$yule[$i]['id']]).">".$yule[$i]['title']."</a></dd>

            </dl>
";
            }
?>
<?php
            for($i=4;$i<6;$i++)
            {
                echo " 
            <div class=\"news-title title\">

                 <span><a href=".Url::to(['from/content','id'=>$yule[$i]['id']]).">".$yule[$i]['title']."</a></span>

                 <div class=\"clearfloat\"></div>

                 <div class=\"zy zy_fk_dj\">".$yule[$i]['description']."...</div>

            </div> 
";
            }
?>
                        
                                </div>

        <!--城事儿--> 

        <div class="w630 fr">

            <div class="qiwen w630 mb20">



                <ul>
<?php
            for($i=6;$i<10;$i++)
            {
                echo " 
                    <li> 

                        <h2><a href=".Url::to(['from/content','id'=>$yule[$i]['id']]).">".$yule[$i]['title']."</a></h2>

                        <p>".$yule[$i]['description']."... </p> 

                    </li>
";
            }
?>
                                 

                </ul>

            </div>

            <!--品味儿--> 

            <div class="qiwen wenhua w630">



                <ul>
<?php
            for($i=9;$i<11;$i++)
            {
                echo " 
                    <li> 

                        <h2><a href=".Url::to(['from/content','id'=>$yule[$i]['id']]).">".$yule[$i]['title']."</a></h2>

                        <p>".$yule[$i]['description']."... </p> 

                    </li>
";
            }
?>
                                                </ul>

            </div>

            <!--口碑儿-->

        </div>

        <!--临沂内容右侧--> 

    </div>

    <!--临沂内容--> 

</div>

<!--临沂模块结束-->


<div class="w1024">

    <div class="w1024 tushang-title m-title mb20"><h2 class="sty-red"><strong>精彩</strong><i></i></h2></div>

    <div class="w1024 tuji mb20">

        <div class="section w1024"> 

             <ul class="clearfix w290 fl">
<?php
            for($i=8;$i<10;$i++)
            {
                echo " 
                                         <li>

                    <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." width=\"290\"  height=\"155\"/></a></div>            

                    <div class=\"text\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><h3>".$newslist[$i]['title']."</h3></a></div>

                </li>
";
            }
?>


                                      </ul>

            <ul class="clearfix w730 fr">
<?php
            for($i=6;$i<8;$i++)
            {
                echo " 
                                        <li class=\"fl mr5\">

                    <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." width=\"240\"  height=\"315\"/></a></div>          

                    <div class=\"text\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><h3>".$newslist[$i]['title']."</h3></a></div>

                </li>
";
            }
?>
<?php
            for($i=5;$i<6;$i++)
            {
                echo " 
                 <li class=\"fr\">

                   <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." width=\"240\"  height=\"315\"/></a></div> 

                   <div class=\"text\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><h3>".$newslist[$i]['title']."</h3></a></div>

                </li>
";
            }
?>
                                    </ul> 

        </div> 

        <div class="section w1024 mb20">  

            <ul class="clearfix w730 fl">
<?php
            for($i=2;$i<4;$i++)
            {
                echo " 
                                        <li class=\"fl mr5\">

                    <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." width=\"240\"  height=\"315\"/></a></div>          

                    <div class=\"text\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><h3>".$newslist[$i]['title']."</h3></a></div>

                </li>
";
            }
?>
<?php
            for($i=4;$i<5;$i++)
            {
                echo " 
                 <li class=\"fr\">

                   <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." width=\"240\"  height=\"315\"/></a></div> 

                   <div class=\"text\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><h3>".$newslist[$i]['title']."</h3></a></div>

                </li>
";
            }
?>

                                     </ul> 

            <ul class="clearfix w290 fr">
<?php
            for($i=0;$i<2;$i++)
            {
                echo " 
                                         <li>

                    <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><img src=".$newslist[$i]['thumb']." width=\"290\"  height=\"155\"/></a></div>            

                    <div class=\"text\"><a href=".Url::to(['from/content','id'=>$newslist[$i]['id']])."><h3>".$newslist[$i]['title']."</h3></a></div>

                </li>
";
            }
?>

                                     </ul>

        </div>

    </div>  

</div>

<!--图集模块--> 

<script type="text/javascript">

$(document).ready(function(){  

    $(".section  ul li").hover(function(){ 

        $(this).find(".text").stop().animate({left:'0'}, {duration: 500})

    },function(){ 

        $(this).find(".text").stop().animate({left:'290'}, {duration: "fast"})

        $(this).find(".text").animate({left:'-290'}, {duration: 0})

    });



});

</script>

<div class="f-link">

    <div class="w1024">

        <h3>友情链接</h3>

        

        <p><a href="http://www.xiumu.cn/" target="_blank">秀目网</a>|<a href="http://www.shangc.net/" target="_blank">尚之潮</a>|<a href="http://www.wenjutv.com/" target="_blank">问剧</a>|<a href="http://www.mum.cc/" target="_blank">暮暮网</a>|<a href="http://f.lynow.cn/" target="_blank">临沂范</a>|</p>

    </div>

</div>

<!--友情链接--> 


