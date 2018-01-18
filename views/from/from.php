<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form=new ActiveForm();
?>
<!--         <script type="text/javascript">  
            function getFileUrl(sourceId) {  
                var url;  
                if (navigator.userAgent.indexOf("MSIE")>=1) { // IE  
                    url = document.getElementById(sourceId).value;  
                } else if(navigator.userAgent.indexOf("Firefox")>0) { // Firefox  
                    url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0));  
                } else if(navigator.userAgent.indexOf("Chrome")>0) { // Chrome  
                    url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0));  
                }  
                return url;  
            }  
            function preImg(sourceId, targetId) {   
                var url = getFileUrl(sourceId);   
                var imgPre = document.getElementById(targetId);   
                imgPre.src = url;   
            }   
        </script> -->  

<?php $form = ActiveForm::begin(['action'=>['from/do_add'],'method'=>'post','options' => ['enctype' => 'multipart/form-data']]) ?>
<?php echo $form->field($model, '姓名')->textInput(['maxlength' => 20]);?>
<?php echo $form->field($model, '性别')->radioList(['1'=>'男','0'=>'女']) ;?>
<?php echo $form->field($model, '手机号')->textInput(['maxlength' => 20]);?>

<?php echo $form->field($model, 'passwords')->passwordInput(['maxlength' => 20]);?>
<label style="font-weight: 25px;">出生年月：</label> 
<br /><input type="date" name="user_date" style="width:auto;heigh: ;t:30px;border-radius: 5%;border:2px solid #ccc;margin-top:3px;"/>
<br /><br />
<?php echo $form->field($model, '期待工资')->textInput(['maxlength' => 20]);?>
<?php echo $form->field($model, '电子邮件')->textInput(['maxlength' => 20]);?>
<!-- <input type="file" name="imgOne" id="imgOne" onchange="preImg(this.id,'photo');" />  
<br />  
<br />  
<img id="photo" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1512390859&di=a581e103ecab8f77e070454d2746f30a&imgtype=jpg&er=1&src=http%3A%2F%2F2e.zol-img.com.cn%2Fproduct%2F64_500x2000%2F410%2Fceneo4LyDg8c.jpg" width="300px" height="300px" style="display: block;" /> 
<br /><br />  -->
<?php echo $form->field($model, 'file')->fileInput() ?>
<?php echo $form->field($model, '求职意向')->textarea(['rows'=>1]) ?>
<?php echo $form->field($model, '专业技能')->textarea(['rows'=>1]) ?>
<?php echo $form->field($model, '工作经历')->textarea(['rows'=>1]) ?>
<?php echo $form->field($model, '自我描述')->textarea(['rows'=>1]) ?>
<?php echo Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']);?>

<?php ActiveForm::end(); ?>