<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wife".
 *
 * @property integer $wife_id
 * @property string $wife_name
 * @property string $wife_ic
 * @property string $wife_work
 * @property string $wife_oku
 * @property integer $people_id
 */
class Wife extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wife';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['people_id'], 'integer'],
            [['wife_name'], 'string', 'max' => 225],
            [['wife_ic', 'wife_work', 'wife_oku'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wife_id' => 'Wife ID',
            'wife_name' => 'Wife Name',
            'wife_ic' => 'Wife Ic',
            'wife_work' => 'Wife Work',
            'wife_oku' => 'Wife Oku',
            'people_id' => 'People ID',
        ];
    }
}
