<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsProduct;

/**
 * ImsProductSearch represents the model behind the search form about `app\models\ImsProduct`.
 */
class ImsProductSearch extends ImsProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_productId', 'ims_totalProductQty', 'ims_categoryId', 'ims_supplierId'], 'integer'],
            [['ims_productName', 'ims_productDesc', 'ims_barcodeProduct'], 'safe'],
            [['ims_productPrice'], 'number'],
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
        $query = ImsProduct::find();

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
            'ims_productId' => $this->ims_productId,
            'ims_productPrice' => $this->ims_productPrice,
            'ims_totalProductQty' => $this->ims_totalProductQty,
            'ims_categoryId' => $this->ims_categoryId,
            'ims_supplierId' => $this->ims_supplierId,
        ]);

        $query->andFilterWhere(['like', 'ims_productName', $this->ims_productName])
            ->andFilterWhere(['like', 'ims_productDesc', $this->ims_productDesc])
            ->andFilterWhere(['like', 'ims_barcodeProduct', $this->ims_barcodeProduct]);

        return $dataProvider;
    }
}
