<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daily_count".
 *
 * @property integer $state_id
 * @property integer $total_by_state
 * @property integer $total_sah_by_state
 * @property integer $total_today
 * @property integer $total_sah_today
 * @property integer $total_yesterday
 * @property integer $total_sah_yesterday
 */
class DailyCount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daily_count';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'total_by_state', 'total_sah_by_state', 'total_today', 'total_sah_today', 'total_yesterday', 'total_sah_yesterday'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'total_by_state' => 'Total By State',
            'total_sah_by_state' => 'Total Sah By State',
            'total_today' => 'Total Today',
            'total_sah_today' => 'Total Sah Today',
            'total_yesterday' => 'Total Yesterday',
            'total_sah_yesterday' => 'Total Sah Yesterday',
        ];
    }
}
