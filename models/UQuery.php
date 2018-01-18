<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[students]].
 *
 * @see students
 */
class UQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return students[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return students|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
