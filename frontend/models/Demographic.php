<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "demographic".
 *
 * @property integer $demographic_id
 * @property string $nama_ketua_kampung
 * @property string $no_tel
 * @property integer $state_id
 * @property integer $district_id
 * @property integer $mukim_id
 * @property integer $sub_base_id
 * @property integer $cluster_id
 * @property integer $kampung_id
 * @property integer $bilangan_rumah
 * @property string $aktiviti_penduduk_kampung
 * @property integer $jenis_kampung_id
 * @property integer $corak_penempatan_id
 * @property integer $jenis_perumahan_id
 * @property string $koordinate
 */
class Demographic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demographic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'district_id', 'mukim_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'bilangan_rumah', 'jenis_kampung_id', 'corak_penempatan_id', 'jenis_perumahan_id'], 'integer'],
            [['nama_ketua_kampung', 'aktiviti_penduduk_kampung', 'koordinate'], 'string', 'max' => 225],
            [['no_tel'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'demographic_id' => 'Demographic ID',
            'nama_ketua_kampung' => 'Nama Ketua Kampung',
            'no_tel' => 'No Tel',
            'state_id' => 'State ID',
            'district_id' => 'District ID',
            'mukim_id' => 'Mukim ID',
            'sub_base_id' => 'Sub Base ID',
            'cluster_id' => 'Cluster ID',
            'kampung_id' => 'Kampung ID',
            'bilangan_rumah' => 'Bilangan Rumah',
            'aktiviti_penduduk_kampung' => 'Aktiviti Penduduk Kampung',
            'jenis_kampung_id' => 'Jenis Kampung ID',
            'corak_penempatan_id' => 'Corak Penempatan ID',
            'jenis_perumahan_id' => 'Jenis Perumahan ID',
            'koordinate' => 'Koordinate',
        ];
    }
}
