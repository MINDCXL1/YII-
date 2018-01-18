<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\News_data;
use app\models\Category;
class News extends ActiveRecord {
	public static function tableName(){
		return "{{%news}}";
	}
    public function getNews_data()
    {
        return $this->hasOne(News_data::className(),['id'=>'id']);
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['catid'=>'catid']);
    }
}
?>