<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_mukim".
 *
 * @property integer $mukim_id
 * @property string $mukim
 * @property integer $district_id
 * @property integer $state_id
 * @property integer $bahagian_id
 */
class LookupMukim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_mukim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['district_id', 'state_id', 'bahagian_id'], 'integer'],
            [['mukim'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mukim_id' => 'Mukim ID',
            'mukim' => 'Mukim',
            'district_id' => 'District ID',
            'state_id' => 'State ID',
            'bahagian_id' => 'Bahagian ID',
        ];
    }
}
