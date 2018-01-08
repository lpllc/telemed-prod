<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Feedback;

class FeedbackSearch extends Feedback
{

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function rules()
    {
        return [
            [ [ 'id',
                'name',
                'contacts',
                'theme',
                'text',
                'created_at'

            ] , 'safe' ]
        ];
    }
    public function search($params)
    {
        $query = Feedback::find();


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [ 'pageSize' => 20 ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'theme', $this->theme])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'created_at', $this->created_at]);

        return $dataProvider;
    }
}