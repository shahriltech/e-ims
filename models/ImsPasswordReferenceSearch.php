<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsPasswordReference;

/**
 * ImsPasswordReferenceSearch represents the model behind the search form about `app\models\ImsPasswordReference`.
 */
class ImsPasswordReferenceSearch extends ImsPasswordReference
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_passrefId', 'ims_userid'], 'integer'],
            [['ims_password'], 'safe'],
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
        $query = ImsPasswordReference::find();

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
            'ims_passrefId' => $this->ims_passrefId,
            'ims_userid' => $this->ims_userid,
        ]);

        $query->andFilterWhere(['like', 'ims_password', $this->ims_password]);

        return $dataProvider;
    }
}
