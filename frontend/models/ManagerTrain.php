<?php

namespace frontend\models;

use Yii;
use common\models\LookupState;
use common\models\LookupDistrict;
use common\models\LookupMukim;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
use common\models\LookupPfnCategory;
/**
 * This is the model class for table "manager_train".
 *
 * @property integer $id
 * @property string $rangkaian_fasiliti_awam
 * @property integer $cat_id
 * @property string $location
 * @property integer $state_id
 * @property integer $district_id
 * @property integer $mukim_id
 * @property integer $sub_base_id
 * @property integer $cluster_id
 * @property integer $kampung_id
 * @property string $alamat
 * @property string $poskod
 * @property string $nama_pengurus
 * @property string $ic
 * @property string $jantina
 * @property string $no_fon
 * @property string $date_enter
 * @property integer $enter_by
 */
class ManagerTrain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manager_train';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'state_id', 'district_id', 'mukim_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'enter_by'], 'integer'],
            [['rangkaian_fasiliti_awam', 'alamat', 'nama_pengurus'], 'string', 'max' => 225],
            [['location', 'poskod', 'ic', 'jantina', 'no_fon', 'date_enter'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rangkaian_fasiliti_awam' => 'Rangkaian Fasiliti Awam',
            'cat_id' => 'Kategori',
            'location' => 'Location',
            'state_id' => 'Negeri',
            'district_id' => 'Daerah',
            'mukim_id' => 'Mukim',
            'sub_base_id' => 'Sub Base',
            'cluster_id' => 'Cluster',
            'kampung_id' => 'Kampung',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'nama_pengurus' => 'Nama Pengurus',
            'ic' => 'No Kad Pengenalan',
            'jantina' => 'Jantina',
            'no_fon' => 'No Fon',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
        ];
    }

    public function getStates()
    {
        return $this->hasOne(LookupState::className(), ['state_id' => 'state_id']);
    }
    public function getDistricts()
    {
        return $this->hasOne(LookupDistrict::className(), ['district_id' => 'district_id']);
    }
    public function getMukims()
    {
        return $this->hasOne(LookupMukim::className(), ['mukim_id' => 'mukim_id']);
    }
    public function getSubBases()
    {
        return $this->hasOne(LookupSubBase::className(), ['sub_base_id' => 'sub_base_id']);
    }
    public function getClusters()
    {
        return $this->hasOne(LookupCluster::className(), ['cluster_id' => 'cluster_id']);
    }
    public function getKampungs()
    {
        return $this->hasOne(LookupKampung::className(), ['kampung_id' => 'kampung_id']);
    }
    public function getCategorys()
    {
        return $this->hasOne(LookupPfnCategory::className(), ['cat_id' => 'cat_id']);
    }

}
