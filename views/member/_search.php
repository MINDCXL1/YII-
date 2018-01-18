<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'phpssouid') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'encrypt') ?>

    <?php // echo $form->field($model, 'nickname') ?>

    <?php // echo $form->field($model, 'regdate') ?>

    <?php // echo $form->field($model, 'lastdate') ?>

    <?php // echo $form->field($model, 'regip') ?>

    <?php // echo $form->field($model, 'lastip') ?>

    <?php // echo $form->field($model, 'loginnum') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'groupid') ?>

    <?php // echo $form->field($model, 'areaid') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'point') ?>

    <?php // echo $form->field($model, 'modelid') ?>

    <?php // echo $form->field($model, 'message') ?>

    <?php // echo $form->field($model, 'islock') ?>

    <?php // echo $form->field($model, 'vip') ?>

    <?php // echo $form->field($model, 'overduedate') ?>

    <?php // echo $form->field($model, 'siteid') ?>

    <?php // echo $form->field($model, 'connectid') ?>

    <?php // echo $form->field($model, 'from') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
