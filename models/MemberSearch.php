<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Member;

/**
 * MemberSearch represents the model behind the search form about `app\models\Member`.
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'phpssouid', 'regdate', 'lastdate', 'loginnum', 'groupid', 'areaid', 'point', 'modelid', 'message', 'islock', 'vip', 'overduedate', 'siteid'], 'integer'],
            [['username', 'password', 'encrypt', 'nickname', 'regip', 'lastip', 'email', 'connectid', 'from', 'mobile'], 'safe'],
            [['amount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Member::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'userid' => $this->userid,
            'phpssouid' => $this->phpssouid,
            'regdate' => $this->regdate,
            'lastdate' => $this->lastdate,
            'loginnum' => $this->loginnum,
            'groupid' => $this->groupid,
            'areaid' => $this->areaid,
            'amount' => $this->amount,
            'point' => $this->point,
            'modelid' => $this->modelid,
            'message' => $this->message,
            'islock' => $this->islock,
            'vip' => $this->vip,
            'overduedate' => $this->overduedate,
            'siteid' => $this->siteid,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'encrypt', $this->encrypt])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'regip', $this->regip])
            ->andFilterWhere(['like', 'lastip', $this->lastip])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'connectid', $this->connectid])
            ->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'mobile', $this->mobile]);

        return $dataProvider;
    }
}
