<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_contact
 *
 * @property Contact $idContact
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_contact'], 'required'],
            [['id_contact'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'id_contact' => Yii::t('app', 'Id Contact'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdContact()
    {
        return $this->hasOne(Contact::className(), ['id' => 'id_contact']);
    }
}
