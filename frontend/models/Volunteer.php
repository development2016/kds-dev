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
 * This is the model class for table "volunteer".
 *
 * @property integer $volunteer_id
 * @property integer $state_id
 * @property integer $district_id
 * @property integer $sub_base_id
 * @property integer $cluster_id
 * @property integer $kampung_id
 * @property string $date
 * @property string $day
 * @property string $time
 * @property string $nama
 * @property string $no_kp
 * @property string $jantina
 * @property string $alamat
 * @property string $poskod
 * @property string $tel_hp
 * @property string $tel_rumah
 * @property string $email
 * @property string $kerja_sukarelawan
 * @property string $persatuan
 * @property string $jawatan
 * @property string $tempoh
 * @property string $prog_kanak_kanak
 * @property string $prog_kemasyarakatan
 * @property string $prog_warga_emas
 * @property string $prog_oku
 * @property string $aktiviti_rekreasi
 * @property string $prog_kesihatan
 * @property string $prog_akademik
 * @property string $lain_lain
 * @property string $bahasa_melayu
 * @property string $bahasa_inggeris
 * @property string $bahasa_tamil
 * @property string $bahasa_cina
 * @property string $lain_lain_2
 * @property string $memiliki_kenderaan
 * @property string $bila_bila_masa
 * @property string $setiap_hari
 * @property string $cuti_am
 * @property string $fasilitator
 * @property string $fotografi
 * @property string $tenaga
 * @property string $lain_lain_3
 * @property string $nota_tambahan
 * @property string $date_enter
 * @property integer $enter_by
 * @property integer $mukim_id
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'district_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'enter_by', 'mukim_id'], 'integer'],
            [['date', 'day', 'time', 'jantina', 'tel_hp', 'tel_rumah', 'kerja_sukarelawan', 'persatuan', 'jawatan', 'tempoh', 'prog_kanak_kanak', 'prog_kemasyarakatan', 'prog_warga_emas', 'prog_oku', 'aktiviti_rekreasi', 'prog_kesihatan', 'prog_akademik', 'bahasa_melayu', 'bahasa_inggeris', 'bahasa_tamil', 'bahasa_cina', 'memiliki_kenderaan', 'bila_bila_masa', 'setiap_hari', 'cuti_am', 'fasilitator', 'fotografi', 'tenaga', 'date_enter'], 'string', 'max' => 45],
            [['nama', 'email'], 'string', 'max' => 225],
            [['no_kp'], 'string', 'max' => 20],
            [['alamat', 'lain_lain', 'lain_lain_2', 'lain_lain_3', 'nota_tambahan'], 'string', 'max' => 255],
            [['poskod'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'volunteer_id' => 'Volunteer ID',
            'state_id' => 'State ID',
            'district_id' => 'District ID',
            'sub_base_id' => 'Sub Base ID',
            'cluster_id' => 'Cluster ID',
            'kampung_id' => 'Kampung ID',
            'date' => 'Date',
            'day' => 'Day',
            'time' => 'Time',
            'nama' => 'Nama',
            'no_kp' => 'No Kad Pengenalan',
            'jantina' => 'Jantina',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'tel_hp' => 'Tel Hp',
            'tel_rumah' => 'Tel Rumah',
            'email' => 'Email',
            'kerja_sukarelawan' => 'Kerja Sukarelawan',
            'persatuan' => 'Persatuan',
            'jawatan' => 'Jawatan',
            'tempoh' => 'Tempoh',
            'prog_kanak_kanak' => 'Prog Kanak Kanak',
            'prog_kemasyarakatan' => 'Prog Kemasyarakatan',
            'prog_warga_emas' => 'Prog Warga Emas',
            'prog_oku' => 'Prog Oku',
            'aktiviti_rekreasi' => 'Aktiviti Rekreasi',
            'prog_kesihatan' => 'Prog Kesihatan',
            'prog_akademik' => 'Prog Akademik',
            'lain_lain' => 'Lain Lain',
            'bahasa_melayu' => 'Bahasa Melayu',
            'bahasa_inggeris' => 'Bahasa Inggeris',
            'bahasa_tamil' => 'Bahasa Tamil',
            'bahasa_cina' => 'Bahasa Cina',
            'lain_lain_2' => 'Lain Lain 2',
            'memiliki_kenderaan' => 'Memiliki Kenderaan',
            'bila_bila_masa' => 'Bila Bila Masa',
            'setiap_hari' => 'Setiap Hari',
            'cuti_am' => 'Cuti Am',
            'fasilitator' => 'Fasilitator',
            'fotografi' => 'Fotografi',
            'tenaga' => 'Tenaga',
            'lain_lain_3' => 'Lain Lain 3',
            'nota_tambahan' => 'Nota Tambahan',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
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
