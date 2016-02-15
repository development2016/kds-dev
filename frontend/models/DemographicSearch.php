<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Demographic;

/**
 * DemographicSearch represents the model behind the search form about `frontend\models\Demographic`.
 */
class DemographicSearch extends Demographic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['demographic_id', 'state_id', 'district_id', 'mukim_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'bilangan_rumah', 'jenis_kampung_id', 'corak_penempatan_id', 'jenis_perumahan_id'], 'integer'],
            [['nama_ketua_kampung', 'no_tel', 'aktiviti_penduduk_kampung', 'koordinate'], 'safe'],
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
        $query = Demographic::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'demographic_id' => $this->demographic_id,
            'state_id' => $this->state_id,
            'district_id' => $this->district_id,
            'mukim_id' => $this->mukim_id,
            'sub_base_id' => $this->sub_base_id,
            'cluster_id' => $this->cluster_id,
            'kampung_id' => $this->kampung_id,
            'bilangan_rumah' => $this->bilangan_rumah,
            'jenis_kampung_id' => $this->jenis_kampung_id,
            'corak_penempatan_id' => $this->corak_penempatan_id,
            'jenis_perumahan_id' => $this->jenis_perumahan_id,
        ]);

        $query->andFilterWhere(['like', 'nama_ketua_kampung', $this->nama_ketua_kampung])
            ->andFilterWhere(['like', 'no_tel', $this->no_tel])
            ->andFilterWhere(['like', 'aktiviti_penduduk_kampung', $this->aktiviti_penduduk_kampung])
            ->andFilterWhere(['like', 'koordinate', $this->koordinate]);

        return $dataProvider;
    }
}
