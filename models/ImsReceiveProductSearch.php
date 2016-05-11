<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsReceiveProduct;

/**
 * ImsReceiveProductSearch represents the model behind the search form about `app\models\ImsReceiveProduct`.
 */
class ImsReceiveProductSearch extends ImsReceiveProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ims_productId', 'ims_invoiceNo', 'ims_qtyRec','ims_receiveBy'], 'integer'],
            [['ims_dateCreate', 'ims_productDesc'], 'safe'],
            [['ims_totalPrice'], 'number'],
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
        $user = Yii::$app->user->identity->id;
        $todayDate = date('d/m/Y');
        $query = ImsReceiveProduct::find()
                ->where(['ims_receiveBy'=>$user])
                ->andWhere(['ims_dateCreate'=>$todayDate]);

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
            'id' => $this->id,
            'ims_productId' => $this->ims_productId,
            'ims_invoiceNo' => $this->ims_invoiceNo,
            'ims_qtyRec' => $this->ims_qtyRec,
            'ims_totalPrice' => $this->ims_totalPrice,
        ]);

        $query->andFilterWhere(['like', 'ims_dateCreate', $this->ims_dateCreate])
            ->andFilterWhere(['like', 'ims_productDesc', $this->ims_productDesc]);

        return $dataProvider;
    }
}
