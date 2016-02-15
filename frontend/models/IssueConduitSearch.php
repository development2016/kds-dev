<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IssueConduit;

/**
 * IssueConduitSearch represents the model behind the search form about `frontend\models\IssueConduit`.
 */
class IssueConduitSearch extends IssueConduit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['issue_id', 'age', 'religion', 'race', 'marital_status', 'kampung_id', 'cluster_id', 'sub_base_id', 'district_id', 'state_id', 'issue_category', 'enter_by', 'kategori_oku_id', 'mukim_id'], 'integer'],
            [['issue_code', 'area_code', 'date', 'day', 'time', 'name', 'no_kp', 'no_kp_old', 'jantina', 'address', 'postcode', 'no_tel', 'issue_report', 'report_by', 'witness_by', 'received_by', 'status', 'analisis_isu', 'cadangan', 'date_enter', 'kategori_oku'], 'safe'],
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
        $query = IssueConduit::find();

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
            'issue_id' => $this->issue_id,
            'age' => $this->age,
            'religion' => $this->religion,
            'race' => $this->race,
            'marital_status' => $this->marital_status,
            'kampung_id' => $this->kampung_id,
            'cluster_id' => $this->cluster_id,
            'sub_base_id' => $this->sub_base_id,
            'district_id' => $this->district_id,
            'state_id' => $this->state_id,
            'issue_category' => $this->issue_category,
            'enter_by' => $this->enter_by,
            'kategori_oku_id' => $this->kategori_oku_id,
            'mukim_id' => $this->mukim_id,
        ]);

        $query->andFilterWhere(['like', 'issue_code', $this->issue_code])
            ->andFilterWhere(['like', 'area_code', $this->area_code])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'no_kp', $this->no_kp])
            ->andFilterWhere(['like', 'no_kp_old', $this->no_kp_old])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'no_tel', $this->no_tel])
            ->andFilterWhere(['like', 'issue_report', $this->issue_report])
            ->andFilterWhere(['like', 'report_by', $this->report_by])
            ->andFilterWhere(['like', 'witness_by', $this->witness_by])
            ->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'analisis_isu', $this->analisis_isu])
            ->andFilterWhere(['like', 'cadangan', $this->cadangan])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter])
            ->andFilterWhere(['like', 'kategori_oku', $this->kategori_oku]);

        return $dataProvider;
    }
}
