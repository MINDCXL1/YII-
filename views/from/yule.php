<?php
use yii\helpers\Url;
?>
<!--top end-->
<div class="w1024 mb20">
  <div class="w675 fl"> 
     <div class="w675 banner mb20">
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <?php foreach($ylthumb as $img): ?>
        <div class="swiper-slide">
          <a href="<?= Url::to(['from/content','id'=>$img['id']]);?>" target="_blank"><img src="<?= $img['thumb'] ?>" alt="赵薇黄晓明和陈坤关系好吗闹掰真相 北影三剑客关系揭秘" /></a>
          <div class="tyt">
                <h2><a href="<?= Url::to(['from/content','id'=>$img['id']]);?>" target="_blank"><?= $img['title'] ?></a></h2> 
            </div></div> 
      <?php endforeach; ?>
                              </div>  
      <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
  </div> 
        <!--焦点图-->   
        <div class="w675">
          <div class="mod-con-list w400 fl">
              <div class="mod-con">
<?php
            for($i=0;$i<1;$i++)
            {
                echo "
                   <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></h3>
                     ";
            }
?>
  <ul class="ulist">
<?php
            for($i=1;$i<5;$i++)
            {
                echo "
                  <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></li>
                       ";
            }
?>
                                   
  </ul>
                </div>
              <div class="mod-con">
<?php
            for($i=5;$i<6;$i++)
            {
                echo "
                   <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></h3>
                     ";
            }
?>
  <ul class="ulist">
<?php
            for($i=6;$i<10;$i++)
            {
                echo "
                  <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></li>
                       ";
            }
?>
                                   
  </ul>
                </div>
               <div class="mod-con">
<?php
            for($i=10;$i<11;$i++)
            {
                echo "
                   <h3 class=\"text1 f18 mb10\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></h3>
                     ";
            }
?>
  <ul class="ulist">
<?php
            for($i=11;$i<15;$i++)
            {
                echo "
                  <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></li>
                       ";
            }
?>
                                   
  </ul>
                </div>           </div>
            <!--mod-con-list-->
            <div class="section fr w240">
              <ul class="clearfix w240">
              <?php
            for($i=3;$i<6;$i++)
            {
                echo "
                                    <li>
                        <div class=\"photo\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><img src=".$ylthumb[$i]['thumb']." width=\"240\"  height=\"130\"/></a></div>       
                        <div class=\"text\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><h3>".$ylthumb[$i]['title']."</h3></a></div>
                    </li>
                                                ";
            }
?>
               
                                         </ul>
            </div>
            <!---->
        </div>
        <!--娱乐栏目左侧列表--->
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
    <!--娱乐栏目第一栏左侧-->
    <div class="w300 fr"> 
       <div class="w300 bb5 pb20 mb40">
          <div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">娱乐<span>看点</span></div>
           </div>
 <?php
            for($i=3;$i<4;$i++)
            {
                echo "
           <div class=\"section_right_top_tent\">
                                  <a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><img src=".$ylthumb[$i]['thumb']." width='300px;'></a>
                    <h2><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></h2>
                    <p>".$ylthumb[$i]['description']."...</p>
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
                 <div class="right_title_main">娱乐<span>专刊</span></div>
           </div>
           <ul class="block_img w300">
 <?php
            for($i=4;$i<9;$i++)
            {
                echo "
                            <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><h2>".$ylthumb[$i]['title']."</h2><img src=".$ylthumb[$i]['thumb']."></a></li>
                      ";
            }
?>
                            </ul>
       </div>
       <!--右侧原创-->   
    </div>
    <!--娱乐栏目第一栏右侧-->
</div>
<!--娱乐栏目第一栏-->
<div class="w1024">
  <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/mingxing/" target="_blank" title="明星">明星</a></div>
    <div class="w1024">
      <div class="w675 fl">
          <div class="w675 banner mb20">
    <div class="swiper-container">
      <div class="swiper-wrapper">
                     
        <?php foreach($ylthumb as $run): ?>
        <div class="swiper-slide">
          <a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><img src="<?= $run['thumb'] ?>" alt="赵薇黄晓明和陈坤关系好吗闹掰真相 北影三剑客关系揭秘" /></a>
          <div class="tyt">
                <h2><a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><?= $run['title'] ?></a></h2> 
            </div></div> 
      <?php endforeach; ?>
                              </div>  
      <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
  </div> 
        <!--焦点图--> 
            
            <div class="w675">
                      <div class="amuse_list w675">
                 <dl>
<?php
            for($i=4;$i<5;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><img src=".$ylthumb[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=5;$i<9;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div>
                                     <div class="amuse_list w675">
                 <dl>
<?php
            for($i=10;$i<11;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><img src=".$ylthumb[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=11;$i<15;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div> 
        </div>
        
        </div>
        <!--明星栏目左侧--> 
        <div class="w300 fr">
          <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>八卦天地</span></div>
               </div>
               <?php
            for($i=12;$i<13;$i++)
            {
                echo "  
                                <dl class=\"w300 dl-list mb20\">
                  <dt><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><img src=".$ylthumb[$i]['thumb']."></a></dt>
                    <dd><span>明星头条</span><h2><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']]).">".$ylthumb[$i]['title']."的</a></h2></dd>
               </dl>
                               ";
            }
?> 
                                <ul class="block_img w300">
                                                  <?php
            for($i=1;$i<6;$i++)
            {
                echo "
                            <li><a href=".Url::to(['from/content','id'=>$ylthumb[$i]['id']])."><h2>".$ylthumb[$i]['title']."</h2><img src=".$ylthumb[$i]['thumb']."></a></li>
                                               ";
            }
?>  
                                      </ul>
           </div>
           <!--八卦天地--> 
        </div>
        <!--明星栏目右侧-->
    </div>
    <div class="w1024 re-more">
      <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/mingxing">浏览更多明星资讯</a></div>
    </div>
</div>
<!--明星模块- end-->  
<div class="w1024">
  <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/mingxing/" target="_blank" title="明星">电视剧</a></div>
    <div class="w1024">
      <div class="w675 fl">
          <div class="w675 banner mb20">
    <div class="swiper-container">
      <div class="swiper-wrapper">
                     
        <?php foreach($dianshi as $run): ?>
        <div class="swiper-slide">
          <a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><img src="<?= $run['thumb'] ?>" alt="赵薇黄晓明和陈坤关系好吗闹掰真相 北影三剑客关系揭秘" /></a>
          <div class="tyt">
                <h2><a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><?= $run['title'] ?></a></h2> 
            </div></div> 
      <?php endforeach; ?>
                              </div>  
      <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
  </div> 
        <!--焦点图--> 
            
            <div class="w675">
                      <div class="amuse_list w675">
                 <dl>
<?php
            for($i=4;$i<5;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']])."><img src=".$dianshi[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']]).">".$dianshi[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=5;$i<9;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']]).">".$dianshi[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div>
                                     <div class="amuse_list w675">
                 <dl>
<?php
            for($i=10;$i<11;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']])."><img src=".$dianshi[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".$dianshi[$i]['url'].">".$dianshi[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=11;$i<15;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']]).">".$dianshi[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div> 
        </div>
        
        </div>
        <!--明星栏目左侧--> 
        <div class="w300 fr">
          <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>抢先剧透</span></div>
               </div>
               <?php
            for($i=12;$i<13;$i++)
            {
                echo "  
                                <dl class=\"w300 dl-list mb20\">
                  <dt><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']])."><img src=".$dianshi[$i]['thumb']."></a></dt>
                    <dd><span>电视头条</span><h2><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']]).">".$dianshi[$i]['title']."</a></h2></dd>
               </dl>
                               ";
            }
?> 
                                <ul class="block_img w300">
                                                  <?php
            for($i=1;$i<6;$i++)
            {
                echo "
                            <li><a href=".Url::to(['from/content','id'=>$dianshi[$i]['id']])."><h2>".$dianshi[$i]['title']."</h2><img src=".$dianshi[$i]['thumb']."></a></li>
                                               ";
            }
?>  
                                      </ul>
           </div>
           <!--八卦天地--> 
        </div>
        <!--明星栏目右侧-->
    </div>
    <div class="w1024 re-more">
      <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/tv">浏览更多电视剧资讯</a></div>
    </div>
</div>

<!--电视剧模块- end-->
  
<!--明星模块- end-->  
<div class="w1024">
  <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/mingxing/" target="_blank" title="明星">综艺</a></div>
    <div class="w1024">
      <div class="w675 fl">
          <div class="w675 banner mb20">
    <div class="swiper-container">
      <div class="swiper-wrapper">
                     
        <?php foreach($zongyi as $run): ?>
        <div class="swiper-slide">
          <a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><img src="<?= $run['thumb'] ?>" alt="赵薇黄晓明和陈坤关系好吗闹掰真相 北影三剑客关系揭秘" /></a>
          <div class="tyt">
                <h2><a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><?= $run['title'] ?></a></h2> 
            </div></div> 
      <?php endforeach; ?>
                              </div>  
      <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
  </div> 
        <!--焦点图--> 
            
            <div class="w675">
                      <div class="amuse_list w675">
                 <dl>
<?php
            for($i=4;$i<5;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']])."><img src=".$zongyi[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']]).">".$zongyi[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=5;$i<9;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']]).">".$zongyi[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div>
                                     <div class="amuse_list w675">
                 <dl>
<?php
            for($i=10;$i<11;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']])."><img src=".$zongyi[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']]).">".$zongyi[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=11;$i<15;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']]).">".$zongyi[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div> 
        </div>
        
        </div>
        <!--明星栏目左侧--> 
        <div class="w300 fr">
          <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>综艺大观</span></div>
               </div>
               <?php
            for($i=12;$i<13;$i++)
            {
                echo "  
                                <dl class=\"w300 dl-list mb20\">
                  <dt><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']])."><img src=".$zongyi[$i]['thumb']."></a></dt>
                    <dd><span>综艺头条</span><h2><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']]).">".$zongyi[$i]['title']."</a></h2></dd>
               </dl>
                               ";
            }
?> 
                                <ul class="block_img w300">
                                                  <?php
            for($i=1;$i<6;$i++)
            {
                echo "
                            <li><a href=".Url::to(['from/content','id'=>$zongyi[$i]['id']])."><h2>".$zongyi[$i]['title']."</h2><img src=".$zongyi[$i]['thumb']."></a></li>
                                               ";
            }
?>  
                                      </ul>
           </div>
           <!--八卦天地--> 
        </div>
        <!--明星栏目右侧-->
    </div>
    <div class="w1024 re-more">
      <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/zongyi">浏览更多综艺资讯</a></div>
    </div>
</div>
<!--明星模块- end-->  
<div class="w1024">
  <div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/mingxing/" target="_blank" title="明星">电影</a></div>
    <div class="w1024">
      <div class="w675 fl">
          <div class="w675 banner mb20">
    <div class="swiper-container">
      <div class="swiper-wrapper">
                     
        <?php foreach($dianying as $run): ?>
        <div class="swiper-slide">
          <a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><img src="<?= $run['thumb'] ?>" alt="赵薇黄晓明和陈坤关系好吗闹掰真相 北影三剑客关系揭秘" /></a>
          <div class="tyt">
                <h2><a href="<?= Url::to(['from/content','id'=>$run['id']]);?>"><?= $run['title'] ?></a></h2> 
            </div></div> 
      <?php endforeach; ?>
                              </div>  
      <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
  </div> 
        <!--焦点图--> 
            
            <div class="w675">
                      <div class="amuse_list w675">
                 <dl>
<?php
            for($i=4;$i<5;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']])."><img src=".$dianying[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']]).">".$dianying[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=5;$i<9;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']]).">".$dianying[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div>
                                     <div class="amuse_list w675">
                 <dl>
<?php
            for($i=10;$i<11;$i++)
            {
                echo "
                     <dt class=\"w240 fr\"><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']])."><img src=".$dianying[$i]['thumb']." alt=\"黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招\"></a></dt>
                     <dd class=\"w400 fl\">
                      <h2><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']]).">".$dianying[$i]['title']."</a></h2> 
                ";
            }
?>
                    
                      <ul> 
                      
<?php
            for($i=5;$i<9;$i++)
            {
                echo "                                                                                                                                                                                
                           <li><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']]).">".$dianying[$i]['title']."</a></li> 
                ";
            }
?>                           
                      </ul>
                   </dd>
                </dl> 
          </div> 
        </div>
        
        </div>
        <!--明星栏目左侧--> 
        <div class="w300 fr">
          <div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>影评天地</span></div>
               </div>
               <?php
            for($i=10;$i<11;$i++)
            {
                echo "  
                                <dl class=\"w300 dl-list mb20\">
                  <dt><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']])."><img src=".$dianying[$i]['thumb']."></a></dt>
                    <dd><span>综艺头条</span><h2<a href=".Url::to(['from/content','id'=>$dianying[$i]['id']]).">".$dianying[$i]['title']."</a></h2></dd>
               </dl>
                               ";
            }
?> 
                                <ul class="block_img w300">
                                                  <?php
            for($i=1;$i<6;$i++)
            {
                echo "
                            <li><a href=".Url::to(['from/content','id'=>$dianying[$i]['id']])."><h2>".$dianying[$i]['title']."</h2><img src=".$dianying[$i]['thumb']."></a></li>
                                               ";
            }
?>  
                                      </ul>
           </div>
           <!--八卦天地--> 
        </div>
        <!--明星栏目右侧-->
    </div>
    <div class="w1024 re-more">
      <div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.yii.com/index.php?r=from/dianying">浏览更多电影资讯</a></div>
    </div>
</div>
<!--电影模块- end-->  
<div class="f-link">
  <div class="w1024">
      <h3>友情链接</h3>
        <p></p>
    </div>
</div>
<!--友情链接-->
