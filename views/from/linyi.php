<?php
use yii\helpers\Url;
?>
<div class="w1024 mb20">
    <div class="w675 fl"> 
        <div class="w675 banner mb20">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($linyi as $lytitle): ?>                   
                <div class="swiper-slide">
                    <a href="<?= Url::to(['from/content','id'=>$lytitle['id']]);?>"><img src="<?= $lytitle['thumb'] ?>" alt="民间临沂传统手工艺即将消失 这些老手艺你还记得几个" /></a>
                    <div class="tyt">
                      <h2> <a href="<?= Url::to(['from/content','id'=>$lytitle['id']]);?>"><?= $lytitle['title'] ?></a></h2> 
                    </div>
                </div> 
              <?php endforeach; ?>  
              </div>  
            <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
        </div>
    </div> 
        <!--焦点图-->   
        <div class="w675">
            <div class="mod-con-list w400 fr">
                <div class="mod-con">

                                                        <h3 class="text1 f18 mb10"><a href="<?= Url::to(['from/content','id'=>$lytitle['id']]);?>"><?= $lytitle['title'] ?></a></h3>
                                                        <ul class="ulist">
                                      <?php foreach($linyi as $lynews): ?> 
                                     <li><a href="<?= Url::to(['from/content','id'=>$lynews['id']]);?>"><?= $lynews['title'] ?></a></li>
                                     <?php endforeach; ?> 
                                                 </ul>
                </div>
                <div class="mod-con">
 <?php
            for($i=4;$i<5;$i++)
            {
                echo "
                                                        <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']]).">".$linyis[$i]['title']."</a></h3>
                                                                                  ";
            }
?>
                                                        <ul class="ulist">
                                                         <?php
            for($i=5;$i<8;$i++)
            {
                echo "
                                                    <li><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']]).">".$linyis[$i]['title']."</a></li>
                                    
                                                                                  ";
            }
?>
                                                 </ul>
                </div>
                <div class="mod-con">
 <?php
            for($i=8;$i<9;$i++)
            {
                echo "
                                                        <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']]).">".$linyis[$i]['title']."</a></h3>
                                                                                  ";
            }
?>
                                                        <ul class="ulist">
                                                          <?php
            for($i=9;$i<12;$i++)
            {
                echo "
                                                    <li><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']]).">".$linyis[$i]['title']."</a></li>
                                    
                                                                                  ";
            }
?>                                          </ul>
                </div>
            </div>
            <!--mod-con-list-->
            <div class="section fl w240">
                <ul class="clearfix w240">
 <?php
            for($i=8;$i<11;$i++)
            {
                echo "
                                                    <li>
                        <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']])."><img src=".$linyis[$i]['thumb']." width=\"240\"  height=\"130\"/></a></div>             
                        <div class=\"text\"><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']])."><h3>".$linyis[$i]['title']."</h3></a></div>
                    </li>
                                                                                  ";
            }
?>   
        </ul>
            </div>
            <!---->
        </div>
        <!--探索栏目左侧列表--->
<script type="text/javascript">
$(document).ready(function(){  
    $(".section  ul li").hover(function(){ 
        $(this).find(".text").stop().animate({left:'0'}, {duration: 500})
    },function(){ 
        $(this).find(".text").stop().animate({left:'240'}, {duration: "fast"})
        $(this).find(".text").animate({left:'-240'}, {duration: 0})
    }); 
});
</script>
    </div>
    <!--探索栏目第一栏左侧-->
    <div class="w300 fr"> 
       <div class="w300 bb5 pb20 mb40">
            <div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">临沂<span>独家</span></div>
           </div>
 <?php
            for($i=6;$i<7;$i++)
            {
                echo "
           <div class=\"section_right_top_tent\">
                                    <a href=".Url::to(['from/content','id'=>$linyis[$i]['id']])."><img src=".$linyis[$i]['thumb']." height=\"200\"></a>
                    <h2><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']]).">".$linyis[$i]['title']."</a></h2>
                    <p>".$linyis[$i]['title']."...</p>
                                   </div> 
                                                                                          ";
            }
?>   
       </div>
       <!--右侧独家--> 
       <div class="w300 bb5">
            <div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">时光<span>临沂</span></div>
           </div>
           <ul class="block_img w300">
           <?php
            for($i=8;$i<13;$i++)
            {
                echo "
                  <li><a href=".Url::to(['from/content','id'=>$linyis[$i]['id']])."><h2>".$linyis[$i]['title']."</h2><img src=".$linyis[$i]['thumb']."></a></li>
              ";
            }
?>   
                              </ul>
       </div>
       <!--右侧原创-->   
    </div>
    <!--探索栏目第一栏右侧-->
</div>
<!--探索栏目第一栏--> 
<div class="w1024">
    <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/linyi/news/" target="_blank" title="城事">城事</a></div>
    <div class="w1024">
        <div class="w675 fl"> 
           <?php
            for($i=0;$i<4;$i++)
            {
                echo "
                    <div class=\"amuse_list w675\">
                 <dl>
                     <dt class=\"w240 fl\"><a href=".Url::to(['from/content','id'=>$chengshi[$i]['id']])."><img src=".$chengshi[$i]['thumb']." alt=\"不文明出行应当坚决抵制 临沂人民广场垃圾乱扔成常态\"></a></dt>
                    <dd class=\"w400 fr\">
                      <h2><a href=".Url::to(['from/content','id'=>$chengshi[$i]['id']]).">".$chengshi[$i]['title']."</a></h2> 
                       <p>".$chengshi[$i]['description']."...</p>
                   </dd>
                </dl> 
          </div>
              ";
            }
?>   
                         
        </div>
        <!--历史栏目左侧--> 
        <div class="w300 fr">
            <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>城事聚焦</span></div>
               </div>
           <?php
            for($i=4;$i<5;$i++)
            {
                echo "
                <dl class=\"w300 dl-list mb20\">
                    <dt><a href=".Url::to(['from/content','id'=>$chengshi[$i]['id']])."><img src=".$chengshi[$i]['thumb']."></a></dt>
                    <dd><span>城事头条</span><h2><a href=".Url::to(['from/content','id'=>$chengshi[$i]['id']]).">".$chengshi[$i]['title']."</a></h2></dd>
               </dl>
              ";
            }
?>   
                                          <ul class="block_img w300"> 
                                                    <?php
            for($i=3;$i<7;$i++)
            {
                echo "
                                               <li><a href=".Url::to(['from/content','id'=>$chengshi[$i]['id']])."><h2>".$chengshi[$i]['title']."</h2><img src=".$chengshi[$i]['thumb']."></a></li>
                                  ";
            }
?>   
                                          </ul>
           </div>
           <!--历史探索--> 
        </div>
        <!--历史栏目右侧-->
    </div>
    <div class="w1024 re-more">
        <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/chengshi">浏览更多城事资讯</a></div>
    </div>
</div>
<!--历史模块- end-->  
<div class="w1024">
    <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/linyi/pinwei/" target="_blank" title="品味">品味</a></div>
    <div class="w1024">
        <div class="w675 fl">  
<?php
            for($i=0;$i<4;$i++)
            {
                echo "
                    <div class=\"amuse_list w675\">
                 <dl>
                     <dt class=\"w240 fl\"><a href=".Url::to(['from/content','id'=>$pingwei[$i]['id']])."><img src=".$pingwei[$i]['thumb']." alt=\"不文明出行应当坚决抵制 临沂人民广场垃圾乱扔成常态\"></a></dt>
                    <dd class=\"w400 fr\">
                      <h2><a href=".Url::to(['from/content','id'=>$pingwei[$i]['id']]).">".$pingwei[$i]['title']."</a></h2> 
                       <p>".$pingwei[$i]['description']."...</p>
                   </dd>
                </dl> 
          </div>
              ";
            }
?>   
                   
                         
        </div>
        <!--奇闻栏目左侧--> 
        <div class="w300 fr">
            <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>品味精品</span></div>
               </div>
           <?php
            for($i=4;$i<5;$i++)
            {
                echo "
                <dl class=\"w300 dl-list mb20\">
                    <dt><a href=".Url::to(['from/content','id'=>$pingwei[$i]['id']])."><img src=".$pingwei[$i]['thumb']."></a></dt>
                    <dd><span>品味头条</span><h2><a href=".Url::to(['from/content','id'=>$pingwei[$i]['id']]).">".$pingwei[$i]['title']."</a></h2></dd>
               </dl>
              ";
            }
?>   
                                          <ul class="block_img w300"> 
                                          <?php
                                               for($i=3;$i<7;$i++)
            {
                echo "
                                               <li><a href=".Url::to(['from/content','id'=>$pingwei[$i]['id']])."><h2>".$pingwei[$i]['title']."</h2><img src=".$pingwei[$i]['thumb']."></a></li>
                                  ";
            }
?>   
                                     </ul>
           </div>
           <!--奇闻轶事--> 
        </div>
        <!--奇闻栏目右侧-->
    </div>
    <div class="w1024 re-more">
        <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/pinwei">浏览更多品味资讯</a></div>
    </div>
</div>
<!--奇闻模块- end-->
  
<div class="w1024">
    <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/linyi/koubei/" target="_blank" title="口碑">口碑</a></div>
    <div class="w1024">
        <div class="w675 fl">  
          <?php
            for($i=6;$i<10;$i++)
            {
                echo "
                    <div class=\"amuse_list w675\">
                 <dl>
                     <dt class=\"w240 fl\"><a href=".Url::to(['from/content','id'=>$koubei[$i]['id']])."><img src=\"images/thumb_240_130_20161015052815756.jpg\" alt=\"不文明出行应当坚决抵制 临沂人民广场垃圾乱扔成常态\"></a></dt>
                    <dd class=\"w400 fr\">
                      <h2><a href=".Url::to(['from/content','id'=>$koubei[$i]['id']]).">".$koubei[$i]['title']."</a></h2> 
                       <p>".$koubei[$i]['description']."...</p>
                   </dd>
                </dl> 
          </div>
              ";
            }
?>   
                
                         </div>
        <!--文化栏目左侧--> 
        <div class="w300 fr">
            <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>口碑排行</span></div>
               </div>
           <?php
            for($i=4;$i<5;$i++)
            {
                echo "
                <dl class=\"w300 dl-list mb20\">
                    <dt><a href=".Url::to(['from/content','id'=>$koubei[$i]['id']])."><img src=\"images/thumb_300_160_20171108053956395.jpg\"></a></dt>
                    <dd><span>品味头条</span><h2><a href=".Url::to(['from/content','id'=>$koubei[$i]['id']]).">".$koubei[$i]['title']."</a></h2></dd>
               </dl>
              ";
            }
?>   
                                          <ul class="block_img w300"> 
                                               <?php
                                               for($i=3;$i<7;$i++)
            {
                echo "
                                               <li><a href=".Url::to(['from/content','id'=>$koubei[$i]['id']])."><h2>".$koubei[$i]['title']."</h2><img src=\"images/thumb_300_160_20171107045519309.jpg\"></a></li>
                                  ";
            }
?>   
                                       </ul>
           </div>
           <!--文化揭秘--> 
        </div>
        <!--文化栏目右侧-->
    </div>
    <div class="w1024 re-more">
        <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/koubei">浏览更多口碑资讯</a></div>
    </div>
</div>
<!--文化模块- end-->   
<div class="f-link">
    <div class="w1024">
        <h3>友情链接</h3>
        <p></p>
    </div>
</div>
<!--友情链接-->

