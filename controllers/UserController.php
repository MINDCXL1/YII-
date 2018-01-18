<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
class UserController extends Controller
{
    public $enableCsrfValidation=false;
    //首页
    public function actionIndex()
    {
        return $this->render('index');
    }
    //基本信息
    public function actionMy_info()
    {
        $this->layout = false;
        return $this->render('my_info');
    }
    public function actionCreate(){
        $this->layout = false;

        // echo "1231";
       $data=Yii::$app->request->Post();
       echo "<pre>";
       print_r($data);exit;
    }
    //修改头像
    public function actionMake_head()
    {
        $this->layout = false;
        return $this->render('make_head');
    }
    //修改密码
    public function actionMake_password()
    {
        $this->layout = false;
        return $this->render('make_password');
    }
    //新闻管理
    public function actionProject_manage()
    {
        $this->layout = false;
        return $this->render('project_manage');
    }
    //新闻发布
    public function actionAddnews()
    {
        $this->layout = false;
        return $this->render('addnews');
    }
    //星级和积分介绍
    public function actionGrade_integration()
    {
        $this->layout = false;
        return $this->render('grade_integration');
    }
    //积分纪录
    public function actionIntegration_record()
    {
        $this->layout = false;
        return $this->render('integration_record');
    }
    //积分规则
    public function actionIntegration_rule()
    {
        $this->layout = false;
        return $this->render('integration_rule');
    }
    //发送新消息
    public function actionMessages()
    {
        $this->layout = false;
        return $this->render('integration_rule');
    }
    //收信件
    public function actionnbox()
    {
        $this->layout = false;
        return $this->render('inbox');
    }
    //发信件
    public function actionnOutbox()
    {
        $this->layout = false;
        return $this->render('Outbox');
    }

    public function actionContent()
    {
        $id=yii::$app->request->get('id');
        $info=News::find()->joinWith('news_data')->alias('a')->joinWith('category')->where(['a.id'=>$id])->one();
        return $this->render('content',['ainfo'=>$info,]);
    }

}
