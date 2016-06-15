<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsPurchaseOrder;

/**
 * ImsPurchaseOrderSearch represents the model behind the search form about `app\models\ImsPurchaseOrder`.
 */
class ImsHistoryorderSearch extends ImsPurchaseOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_purchaseId', 'ims_orderBy', 'ims_productId', 'ims_productQty','ims_supplierId'], 'integer'],
            [['ims_purchaseDate'], 'safe'],
            [['ims_productTotalprice'], 'number'],
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
        $query = ImsPurchaseOrder::find()->select(['ims_purchaseDate','ims_invoicePurchaseno'])
                ->distinct()
                ->where(['ims_statusOrder'=>'Approved']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['ims_purchaseId' => SORT_DESC]],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ims_purchaseId' => $this->ims_purchaseId,
            'ims_orderBy' => $this->ims_orderBy,
            'ims_productId' => $this->ims_productId,
            'ims_productQty' => $this->ims_productQty,
            'ims_productTotalprice' => $this->ims_productTotalprice,
        ]);

        $query->andFilterWhere(['like', 'ims_purchaseDate', $this->ims_purchaseDate]);

        return $dataProvider;
    }
}
