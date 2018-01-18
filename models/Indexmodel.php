<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
class Indexmodel extends Model
{
    public $姓名;
    public $passwords;
    public $性别;
    public $手机号;
	public $电子邮件;
    public $期待工资;
    public $求职意向;
    public $专业技能;
    public $工作经历;
    public $自我描述;
    public $file;
    public function rules()
    {
        return [
            [['file'], 'file', 'extensions' => 'jpg, png', 'mimeTypes' => 'image/jpeg, image/png',],
             [['姓名','passwords','性别','手机号','电子邮件','期待工资','求职意向','专业技能','工作经历','自我描述'],'required']
        ];
    }
}
