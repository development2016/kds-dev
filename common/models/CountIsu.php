<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "count_isu".
 *
 * @property integer $state_id
 * @property integer $akademik_kerjaya
 * @property integer $kesihatan
 * @property integer $ekonomi_usahawanan
 * @property integer $kebajikan
 * @property integer $remaja_belia_warga
 * @property integer $lain_lain
 */
class CountIsu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'count_isu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'akademik_kerjaya', 'kesihatan', 'ekonomi_usahawanan', 'kebajikan', 'remaja_belia_warga', 'lain_lain'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'akademik_kerjaya' => 'Akademik Kerjaya',
            'kesihatan' => 'Kesihatan',
            'ekonomi_usahawanan' => 'Ekonomi Usahawanan',
            'kebajikan' => 'Kebajikan',
            'remaja_belia_warga' => 'Remaja Belia Warga',
            'lain_lain' => 'Lain Lain',
        ];
    }
}
