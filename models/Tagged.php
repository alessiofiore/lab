<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tagged".
 *
 * @property integer $id_contact
 * @property integer $id_tag
 *
 * @property Contact $idContact
 * @property Tag $idTag
 */
class Tagged extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tagged';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_contact', 'id_tag'], 'required'],
            [['id_contact', 'id_tag'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contact' => 'Id Contact',
            'id_tag' => 'Id Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdContact()
    {
        return $this->hasOne(Contact::className(), ['id' => 'id_contact']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'id_tag']);
    }
}
