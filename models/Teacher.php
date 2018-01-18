<?php
namespace app\models;

use yii\db\ActiveRecord;

class Teacher extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%users}}';
	}
}

?>