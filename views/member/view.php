<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Member */

$this->title = $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->userid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'userid',
            'phpssouid',
            'username',
            'password',
            'encrypt',
            'nickname',
            'regdate',
            'lastdate',
            'regip',
            'lastip',
            'loginnum',
            'email:email',
            'groupid',
            'areaid',
            'amount',
            'point',
            'modelid',
            'message',
            'islock',
            'vip',
            'overduedate',
            'siteid',
            'connectid',
            'from',
            'mobile',
        ],
    ]) ?>

</div>
