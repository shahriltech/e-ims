<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsCategory;

/**
 * ImsCategorySearch represents the model behind the search form about `app\models\ImsCategory`.
 */
class ImsCategorySearch extends ImsCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_categoryId'], 'integer'],
            [['ims_categoryName', 'ims_categoryDesc'], 'safe'],
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
        $query = ImsCategory::find();

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
            'ims_categoryId' => $this->ims_categoryId,
        ]);

        $query->andFilterWhere(['like', 'ims_categoryName', $this->ims_categoryName])
            ->andFilterWhere(['like', 'ims_categoryDesc', $this->ims_categoryDesc]);

        return $dataProvider;
    }
}
