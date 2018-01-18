<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%member}}".
 *
 * @property string $userid
 * @property string $phpssouid
 * @property string $username
 * @property string $password
 * @property string $encrypt
 * @property string $nickname
 * @property string $regdate
 * @property string $lastdate
 * @property string $regip
 * @property string $lastip
 * @property integer $loginnum
 * @property string $email
 * @property integer $groupid
 * @property integer $areaid
 * @property string $amount
 * @property integer $point
 * @property integer $modelid
 * @property integer $message
 * @property integer $islock
 * @property integer $vip
 * @property string $overduedate
 * @property integer $siteid
 * @property string $connectid
 * @property string $from
 * @property string $mobile
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%member}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phpssouid', 'encrypt', 'nickname'], 'required'],
            [['phpssouid', 'regdate', 'lastdate', 'loginnum', 'groupid', 'areaid', 'point', 'modelid', 'message', 'islock', 'vip', 'overduedate', 'siteid'], 'integer'],
            [['amount'], 'number'],
            [['username', 'nickname'], 'string', 'max' => 20],
            [['password', 'email'], 'string', 'max' => 32],
            [['encrypt'], 'string', 'max' => 6],
            [['regip', 'lastip'], 'string', 'max' => 15],
            [['connectid'], 'string', 'max' => 40],
            [['from'], 'string', 'max' => 10],
            [['mobile'], 'string', 'max' => 11],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'phpssouid' => 'Phpssouid',
            'username' => 'Username',
            'password' => 'Password',
            'encrypt' => 'Encrypt',
            'nickname' => 'Nickname',
            'regdate' => 'Regdate',
            'lastdate' => 'Lastdate',
            'regip' => 'Regip',
            'lastip' => 'Lastip',
            'loginnum' => 'Loginnum',
            'email' => 'Email',
            'groupid' => 'Groupid',
            'areaid' => 'Areaid',
            'amount' => 'Amount',
            'point' => 'Point',
            'modelid' => 'Modelid',
            'message' => 'Message',
            'islock' => 'Islock',
            'vip' => 'Vip',
            'overduedate' => 'Overduedate',
            'siteid' => 'Siteid',
            'connectid' => 'Connectid',
            'from' => 'From',
            'mobile' => 'Mobile',
        ];
    }

    /**
     * @inheritdoc
     * @return MemberQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MemberQuery(get_called_class());
    }
}
