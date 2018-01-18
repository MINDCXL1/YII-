<?php
use yii\helpers\Url;
?>


<!-- top + banner 结束 -->

<!-- 核心 开始 -->

<div class="container border1 nopadding margin10">

  <div id="vertical_navigation" class="col-lg-3 background831312 nopadding">

    <div class="dead_pic"><img src="images/nopic.jpg.png"><br>

      <span class="username">用户名</span></div>

    <div class="usertype">用户类型： 金牌用户<br>

      会员等级：  <img style="margin-right:0px;" src="images/xx2.png" /> <img style="margin-right:0px;" src="images/xx2.png" /> <img style="margin-right:0px;" src="images/xx2.png"></img> <img style="margin-right:0px;" src="images/xx2.png"></img> </div>

    <div class="menu">

      <div class="menu_title"> 我的信息 </div>

      <div class="menu_list">

        <ul class="list-unstyled">

            <li id="listClick1" class="menu_list_on" onClick="listClick(1)"><img src="images/left_icon_1.png"> 基本信息</li>

          <li id="listClick2" class="" onClick="listClick(2)"> <img src="images/left_icon_2.png"> 修改头像</li>

          <li id="listClick4" class="" onClick="listClick(4)"> <img src="images/left_icon_3.png"> 修改密码</li>


        </ul>

      </div>

    </div>

    <div class="menu">

      <div class="menu_title"> 我的发布 </div>

      <div class="menu_list">

        <ul class="list-unstyled">

          <li id="listClick6" class="" onClick="listClick(6)"><img src="images/left_icon_6.png"> 新闻管理</li>
          <li id="listClick19" class="" onClick="listClick(19)"><img src="images/left_icon_6.png"> 新闻发布</li>

        </ul>

      </div>

    </div>


    <div class="menu">

      <div class="menu_title"> 我的星级和积分 </div>

      <div class="menu_list">

        <ul class="list-unstyled">

          <li id="listClick11" class="" onClick="listClick(11)"><img src="images/left_icon_9.png"> 星级和积分介绍</li>

          <li id="listClick12" class="" onClick="listClick(12)"> <img src="images/left_icon_12.png"> 积分纪录</li>

          <li id="listClick13" class="" onClick="listClick(13)"> <img src="images/left_icon_13.png"> 积分规则</li>

        </ul>

      </div>

    </div>

    <div class="menu">

      <div class="menu_title"> 我的消息 </div>

      <div class="menu_list">

        <ul class="list-unstyled">

          <li id="listClick14" class="" onClick="listClick(14)"><img src="images/left_icon_14.png"> 发送新消息</li>

          <li id="listClick15" class="" onClick="listClick(15)"> <img src="images/left_icon_15.png"> 收件箱</li>

          <li id="listClick16" class="" onClick="listClick(16)"> <img src="images/left_icon_16.png"> 发件箱</li>

        </ul>

      </div>

    </div>

  </div>

  <div class="col-lg-9">

  	<iframe name="left" id="crowdfunding_iframe" src="<?= Url::to(['user/my_info']);?>" frameborder="false" scrolling="no" style="border:none;" width="100%" height="1045" allowtransparency="true"></iframe>

  </div>

</div>

<!-- 核心 结束 -->  



<!-- 版权 开始 -->

