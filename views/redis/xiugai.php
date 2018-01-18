<?php

?>
<body style="margin: 0 auto; width: 200px;">
    <form action="/index.php?r=redis/do_up" method="post" enctype="multipart/form-data">
    <br/>
    	<input type="hidden" value="<?=$x[1]-1;?>" name="id">		
        姓名：<input style="text-align: center;color: #000;" name="username" placeholder="<?=$x[3];?>" value="<?=$x[3];?>"  /><br/><br/>
        性别：<input style="text-align: center;color: #000;" name="sex" placeholder="<?=$x[5];?>" value="<?=$x[5];?>" /><br/><br/>
        身份证:<input style="text-align: center;color: #000;" name="idcate" placeholder="<?=$x[7];?>" value="<?=$x[7];?>" /><br/><br/>

        

		<button style="margin: 0 auto; width: 200px;">修改</button>
	</form>
	</body>