<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\News_data;
use app\models\Category;
class Users extends ActiveRecord {
	public static function tableName(){
		return "{{%users}}";
	}
    
}
?>