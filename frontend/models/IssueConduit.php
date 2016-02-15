<?php

namespace frontend\models;

use Yii;
use common\models\LookupState;
use common\models\LookupDistrict;
use common\models\LookupMukim;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
/**
 * This is the model class for table "issue_conduit".
 *
 * @property integer $issue_id
 * @property string $issue_code
 * @property string $area_code
 * @property string $date
 * @property string $day
 * @property string $time
 * @property string $name
 * @property string $no_kp
 * @property string $no_kp_old
 * @property string $jantina
 * @property integer $age
 * @property integer $religion
 * @property integer $race
 * @property integer $marital_status
 * @property string $address
 * @property string $postcode
 * @property integer $kampung_id
 * @property integer $cluster_id
 * @property integer $sub_base_id
 * @property integer $district_id
 * @property integer $state_id
 * @property string $no_tel
 * @property integer $issue_category
 * @property string $issue_report
 * @property string $report_by
 * @property string $witness_by
 * @property string $received_by
 * @property string $status
 * @property string $analisis_isu
 * @property string $cadangan
 * @property string $date_enter
 * @property integer $enter_by
 * @property string $kategori_oku
 * @property integer $kategori_oku_id
 * @property integer $mukim_id
 */
class IssueConduit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'issue_conduit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age', 'religion', 'race', 'marital_status', 'kampung_id', 'cluster_id', 'sub_base_id', 'district_id', 'state_id', 'issue_category', 'enter_by', 'kategori_oku_id', 'mukim_id'], 'integer'],
            [['issue_code', 'area_code'], 'string', 'max' => 50],
            [['date', 'day', 'time', 'date_enter'], 'string', 'max' => 45],
            [['name', 'address', 'report_by', 'witness_by', 'received_by'], 'string', 'max' => 225],
            [['no_kp', 'no_kp_old', 'jantina', 'kategori_oku'], 'string', 'max' => 15],
            [['postcode'], 'string', 'max' => 10],
            [['no_tel'], 'string', 'max' => 12],
            [['issue_report', 'analisis_isu', 'cadangan'], 'string', 'max' => 1000],
            [['status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'issue_id' => 'Issue ID',
            'issue_code' => 'Issue Code',
            'area_code' => 'Area Code',
            'date' => 'Date',
            'day' => 'Day',
            'time' => 'Time',
            'name' => 'Nama',
            'no_kp' => 'No Kad Pengenalan',
            'no_kp_old' => 'No Kp Old',
            'jantina' => 'Jantina',
            'age' => 'Age',
            'religion' => 'Religion',
            'race' => 'Race',
            'marital_status' => 'Marital Status',
            'address' => 'Address',
            'postcode' => 'Postcode',
            'kampung_id' => 'Kampung ID',
            'cluster_id' => 'Cluster ID',
            'sub_base_id' => 'Sub Base ID',
            'district_id' => 'District ID',
            'state_id' => 'State ID',
            'no_tel' => 'No Telefon',
            'issue_category' => 'Issue Category',
            'issue_report' => 'Issue Report',
            'report_by' => 'Report By',
            'witness_by' => 'Witness By',
            'received_by' => 'Received By',
            'status' => 'Status',
            'analisis_isu' => 'Analisis Isu',
            'cadangan' => 'Cadangan',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'kategori_oku' => 'Kategori Oku',
            'kategori_oku_id' => 'Kategori Oku ID',
            'mukim_id' => 'Mukim ID',
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
    
}
