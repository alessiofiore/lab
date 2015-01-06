<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contact;

/**
 * ContactSearch represents the model behind the search form about `app\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['firstname', 'lastname', 'title', 'position', 'company', 'phone_home', 'phone_work', 'mobile', 'mobile2', 'fax', 'email_personal', 'email_work', 'address_home', 'address_work', 'notes'], 'safe'],
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
        $query = Contact::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'phone_home', $this->phone_home])
            ->andFilterWhere(['like', 'phone_work', $this->phone_work])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'mobile2', $this->mobile2])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email_personal', $this->email_personal])
            ->andFilterWhere(['like', 'email_work', $this->email_work])
            ->andFilterWhere(['like', 'address_home', $this->address_home])
            ->andFilterWhere(['like', 'address_work', $this->address_work])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
