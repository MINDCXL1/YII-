<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<div class="sub-wrap mb20">
  <div class="w1024"> 
      <div class="list-dw"><a href="http://www.lynow.cn">今日临沂</a><span>&gt;</span><a href="http://www.lynow.cn/linyi/">临沂</a> > <a href="http://www.lynow.cn/linyi/news/">城事</a> > </div>
    </div>
</div>
<!--sub-wrap-->
<div class="w1024 content">

  <div class="w675 fl"> 
        <ul class="w675 aikan-list mb40"> 
         <?php foreach($model as $model): ?>   
          <li><a href="<?= Url::to(['from/content','id'=>$model['id']]);?>">
                      <img src="<?= $model['thumb'] ?>">
                        <div class="fr tent">
                          <h2><?= $model['title'] ?></h2>
                            <p><?= $model['description'] ?>...</p>
                        </div>
                    </a>
          </li>

          <?php endforeach; ?> 
           <?= LinkPager::widget([
            'pagination' => $pages,
            'nextPageLabel' => '下一页', 
            'prevPageLabel' => '上一页',
            'options' => ['class' => 'm-pagination'], 
            // 'firstPageLabel' => '首页', 
            // 'lastPageLabel' => '尾页'
           ]); ?>
        </ul>      

         <!-- <div class="linle-pag0 mb20">
                <div class="linle-page123">                    
                     <a href="/linyi/news/index.html" class="a1">上一页</a> <span id="sjfenye">1</span> <a id="sjfenye" href="/linyi/news/2.html">2</a> <a id="sjfenye" href="/linyi/news/3.html">3</a> <a id="sjfenye" href="/linyi/news/4.html">4</a> <a id="sjfenye" href="/linyi/news/5.html">5</a> <a id="sjfenye" href="/linyi/news/6.html">6</a> <a id="sjfenye" href="/linyi/news/7.html">7</a> <a id="sjfenye" href="/linyi/news/8.html">8</a> ..<a id="sjfenye" href="/linyi/news/10.html">10</a> <a href="/linyi/news/2.html" class="a1" >下一页</a>                </div>
            </div> -->
            <!--分页-->
         <div class="mb20"><script>list_pagedown();</script></div>
      </div>
    <!--list_left-->
    <div class="w300 fr">
      <div class="mb20"><script>list_ad1();</script></div>
    
  
        <!--广告位--> 
        <div class="w300 mb20">
          <div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main"><span>编辑推荐</span></div>
           </div>
          <div class="w300 bjtj">
                     <?php
            for($i=0;$i<1;$i++)
            {
                echo "
                        <dl class=\"mb10\">
              <dt><a href=".Url::to(['from/content','id'=>$rows[$i]['id']])."><img src=".$rows[$i]['thumb']."></a></dt>
                <dd><a href=".Url::to(['from/content','id'=>$rows[$i]['id']]).">".$rows[$i]['title']."</a></dd> 
            </dl>
                          ";
            }
?>   
                        <ul>
                                             <?php
            for($i=2;$i<6;$i++)
            {
                echo "
                          <li><a href=".Url::to(['from/content','id'=>$rows[$i]['id']]).">".$rows[$i]['title']."</a></li>
                                              ";
            }
?>   
                        </ul> 
          </div> 
       </div>
       <!--编辑推荐-->  
      
      <div class="mb20"><script>list_ad2();</script></div>
        
       <!--广告位-->
        
       <div class="w300 mb20">
            <div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main"><span>精彩图赏</span></div>
           </div> 
           <div class="w300 star-list">
                                <?php
            for($i=0;$i<4;$i++)
            {
                echo "
                             <dl><a href=".Url::to(['from/content','id'=>$rows[$i]['id']]).">
                  <dt><img src=".$rows[$i]['thumb']."></dt>
                    <dd>".$rows[$i]['title']."</dd> 
                </a></dl>
                     ";
            }
?>  
                             </div> 
       </div>
       <!--明星风尚-->
       <div class="mb20"><script>list_ad3();</script></div>
        <div class="w300 mb20">
          <div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main"><span>临沂独家</span></div>
           </div>
           <ul class="block_img w300">
              <?php
            for($i=3;$i<7;$i++)
            {
                echo "
                            <li><a href=".Url::to(['from/content','id'=>$rows[$i]['id']])."><h2>".$rows[$i]['title']."</h2><img src=".$rows[$i]['thumb']."></a></li>
                                               ";
            }
?>  
                            </ul>
       </div>
       <!--右侧原创-->  
 
      
    </div>
    <!--list_right-->
</div>
<style>
.m-pagination{margin:0 auto;}
.m-pagination a {text-align: center;display: none;}
</style>
<!--list--> 

