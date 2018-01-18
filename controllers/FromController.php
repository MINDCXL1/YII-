<?php

namespace app\controllers;
use app\models\Indexmodel;
use app\models\Teacher;
use yii\web\UploadedFile;
use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use yii\db\Query;
use yii\data\Pagination;
use app\models\News;
use app\models\Category;
class FromController extends Controller
{
    public $layout = "mains";
    //简历提交页面
    public function actionFrom()
    {
        // $list=Teacher::find()->all();
        // echo "<pre>";
        // print_r($list);exit;
        $model = new Indexmodel;
            if (Yii::$app->request->isPost) {
        $model->file = UploadedFile::getInstance($model, 'file');

        if ($model->file && $model->validate()) {
            $model->file->saveAs("uploads/" . $model->file->baseName . '.' . $model->file->extension);
        }
    }
        return $this->render('from',['model'=>$model]);
    }

    //简历页面
    public function actionResume()
    {
        return $this->render('resume');
    }
    public function actionDo_add()
     {
        $data=Yii::$app->request->post();
        echo "<pre>";
        print_r($data);
     }
    public $nav = '';
    public function init(){
        $sql = "select catname,url from {{%category}} order by catid asc";
        Yii::$app->language = 'en';
        Yii::$app->charset= 'UTF-8';
//        print_r($sql);exit;
        $this->nav  = Yii::$app->db->createCommand($sql)->queryAll();
    }
      public function actionIndex()
    {
         $shouye = News::find()->where('catid=9')->orderBy('inputtime desc')->all();
         // echo "<pre>";
         // print_r($shouye);exit;
          $redis=Yii::$app->redis;
        //  foreach ($shouye as $key => $v) {
        //     $redis->incr('shouyeid');
        //     $redis->hmset('shouye:'.$v['id'],'id',$v['id'],'catid',$v['catid'],'typeid',$v['typeid'],'title',$v['title'],'style',$v['style'],'thumb',$v['thumb'],'keywords',$v['keywords'],'description',$v['description'],'posids',$v['posids'],'url',$v['url'],'listorder',$v['listorder'],'status',$v['status'],'sysadd',$v['sysadd'],'islink',$v['islink'],'username',$v['username'],'inputtime',$v['inputtime'],'updatetime',$v['updatetime']);
        //     $redis->rpush('sid',$v['id']);
        // }

         $linyi=News::find()->where('catid=10')->orderBy('inputtime desc')->all();
         $linyititle=Category::find()->where('catid=11 or catid=12 or catid=13')->all();
         $yule=News::find()->where('catid=14 or catid=15')->orderBy('inputtime desc')->all();
         $yuletitle=Category::find()->where('catid=15 or catid=16 or catid=17 or catid=18')->all();
         // echo "<pre>";
         // print_r($linyititle);exit;
        return $this->render('index', [
            'newslist'=>$shouye,
            'linyi'=>$linyi,
            'linyi2'=>$linyititle,
            'yule'=>$yule,
            'yule2'=>$yuletitle,
            ]); 

    }
    public function actionContent()
    {
        $id=yii::$app->request->get('id');
        //$info=News::findOne($id);
        $info=News::find()->joinWith('news_data')->alias('a')->joinWith('category')->where(['a.id'=>$id])->one();
        // echo "<pre>";
        // print_r($info);exit
        return $this->render('content',['ainfo'=>$info,]);
    }
    public function actionLinyi()
    { 
        $linyi=News::find()->where('catid=10')->limit(3)->orderBy('inputtime desc')->all();
        $sql =News::find()->where('catid=10')->orderBy('inputtime desc')->all();
        $chengshi =News::find()->where('catid=11')->orderBy('inputtime desc')->all();
        $pingwei =News::find()->where('catid=12')->orderBy('inputtime desc')->all();
        $koubei =News::find()->where('catid=13')->orderBy('inputtime desc')->all();
         // echo "<pre>";
         // print_r($sql);exit;
        return $this->render('linyi',
            [  
            'linyi'=>$linyi,
            'linyis'=>$sql,
            'chengshi'=>$chengshi,
            'pingwei'=>$pingwei,
            'koubei'=>$koubei
            ]);
    }
    public function actionChengshi()
    {
        $data = News::find()->where('catid=10')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(),
            'pageSize' => '15',
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
        ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();

        $sql =News::find()->where('catid=11')->orderBy('inputtime desc')->all();
        return $this->render('chengshi',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
    public function actionPinwei()
    {
         $data = News::find()->where('catid=12')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(), 
            'pageSize' => '15', 
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
            ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        $sql =News::find()->where('catid=11')->orderBy('inputtime desc')->all();
        return $this->render('pinwei',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
    public function actionKoubei()
    {
        $data = News::find()->where('catid=13')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(), 
            'pageSize' => '15', 
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
            ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        $sql =News::find()->where('catid=11')->orderBy('inputtime desc')->all();
        return $this->render('koubei',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
    public function actionYule()
    {
        $sql =News::find()->where('catid=15')->orderBy('inputtime desc')->all();
        $sqls =News::find()->where('catid=16')->orderBy('inputtime desc')->all();
        $sqlss =News::find()->where('catid=17')->orderBy('inputtime desc')->all();
        $sqlsss =News::find()->where('catid=18')->orderBy('inputtime desc')->all();
        return $this->render('yule',
            [
                'ylthumb'=>$sql,
                'dianshi'=>$sqls,
                'zongyi'=>$sqlss,
                'dianying'=>$sqlsss
            ]);
    }
    public function actionMingxing()
    {
         $data = News::find()->where('catid=15')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(), 
            'pageSize' => '15', 
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
            ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        $sql =News::find()->where('catid=13')->orderBy('inputtime desc')->all();
        return $this->render('mingxing',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
    public function actionTv()
    {
        $data = News::find()->where('catid=16')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(), 
            'pageSize' => '15', 
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
            ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        $sql =News::find()->where('catid=16')->orderBy('inputtime desc')->all();
        return $this->render('tv',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
    public function actionZongyi()
    {
        $data = News::find()->where('catid=17')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(), 
            'pageSize' => '15', 
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
            ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        $sql =News::find()->where('catid=17')->orderBy('inputtime desc')->all();
        return $this->render('zongyi',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
    public function actionDianying()
    {
                $data = News::find()->where('catid=18')->orderBy('inputtime desc');
        $pages = new Pagination([
            'totalCount' =>$data->count(), 
            'pageSize' => '15', 
            // 'params'=>array_merge($_GET, ['category'=>$c,'dicttype'=>$d])
            ]);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        $sql =News::find()->where('catid=18')->orderBy('inputtime desc')->all();
        return $this->render('dianying',
            [
            'model' => $model,
            'pages' => $pages,
            'rows'=>$sql
            ]);
    }
   
}
