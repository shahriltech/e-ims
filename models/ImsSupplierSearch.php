<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsSupplier;

/**
 * ImsSupplierSearch represents the model behind the search form about `app\models\ImsSupplier`.
 */
class ImsSupplierSearch extends ImsSupplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_supplierId'], 'integer'],
            [['ims_supplierName', 'ims_supplierPhone', 'ims_supplierAddress', 'ims_supplierEmail'], 'safe'],
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
        $query = ImsSupplier::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ims_supplierId' => $this->ims_supplierId,
        ]);

        $query->andFilterWhere(['like', 'ims_supplierName', $this->ims_supplierName])
            ->andFilterWhere(['like', 'ims_supplierPhone', $this->ims_supplierPhone])
            ->andFilterWhere(['like', 'ims_supplierAddress', $this->ims_supplierAddress])
            ->andFilterWhere(['like', 'ims_supplierEmail', $this->ims_supplierEmail]);

        return $dataProvider;
    }
}
