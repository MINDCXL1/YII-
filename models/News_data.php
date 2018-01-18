<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5 0005
 * Time: 上午 10:19
 */
namespace app\models;

use yii\db\ActiveRecord;

class News_data extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news_data}}';
    }

}
