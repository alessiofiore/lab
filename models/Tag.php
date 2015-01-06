<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tag".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Tagged[] $taggeds
 * @property Contact[] $idContacts
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaggeds()
    {
        return $this->hasMany(Tagged::className(), ['id_tag' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdContacts()
    {
        return $this->hasMany(Contact::className(), ['id' => 'id_contact'])->viaTable('Tagged', ['id_tag' => 'id']);
    }
}
