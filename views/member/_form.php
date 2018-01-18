<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phpssouid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'encrypt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loginnum')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groupid')->textInput() ?>

    <?= $form->field($model, 'areaid')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'point')->textInput() ?>

    <?= $form->field($model, 'modelid')->textInput() ?>

    <?= $form->field($model, 'message')->textInput() ?>

    <?= $form->field($model, 'islock')->textInput() ?>

    <?= $form->field($model, 'vip')->textInput() ?>

    <?= $form->field($model, 'overduedate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'siteid')->textInput() ?>

    <?= $form->field($model, 'connectid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
