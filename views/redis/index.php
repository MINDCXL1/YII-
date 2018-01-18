<?php

?>
<body style="margin: 0 auto;width:50%;">
<a style="color: #000;" href="/index.php?r=redis/zengjia">增加</a>
<table width="800px" cellpadding="0" cellspacing="0" border="1">
    <tr>
        <th style="text-align: center;color: #000;">id</th>
        <th style="text-align: center;color: #000;">姓名</th>
        <th style="text-align: center;color: #000;">身份证号</th>
        <th style="text-align: center;color: #000;">操作</th>
    </tr>
    <?php
    foreach($ulist as $v):
    ?>
    <tr>
        <td style="text-align: center;color: #000;"><?=$v[1];?></td>
        <td style="text-align: center;color: #000;"><?=$v[3];?></td>
        <td style="text-align: center;color: #000;"><?=$v[5];?></td>
        <td style="text-align: center;color: #000;"><a style="color: #000;" href="/index.php?r=redis/deluser&id=<?=$v[1];?>">删除</a>　|　
        <a style="color: #000;" href="/index.php?r=redis/xiugai&id=<?=$v[1];?>">修改</a></td>
    </tr>
    <?php endforeach;?>

</table>
    <div style="margin: 0 700;width: 150px;">
    <a style="color: #000;" href="/index.php?r=redis/redis&page=<?=$page-1?>">上一页</a>
    <a style="color: #000;" href="/index.php?r=redis/redis&page=<?=$page+1?>">下一页</a>
    </div>
</body>