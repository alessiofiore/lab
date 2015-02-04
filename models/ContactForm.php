<?php

namespace app\models;

use Yii;
use yii\base\Model;

/** 
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $title
 * @property string $position
 * @property string $company
 * @property string $phone_home
 * @property string $phone_work
 * @property string $mobile
 * @property string $mobile2
 * @property string $fax
 * @property string $email_personal
 * @property string $email_work
 * @property string $address_home
 * @property string $address_work
 * @property string $notes
 * @property string $tags
 */
class ContactForm extends Model
{
	 public $id;
	 public $firstname;
	 public $lastname;
	 public $title;
	 public $position;
	 public $company;
	 public $phone_home;
	 public $phone_work;
	 public $mobile;
	 public $mobile2;
	 public $fax;
	 public $email_personal;
	 public $email_work;
	 public $address_home;
	 public $address_work;
	 public $notes;
	 public $tags;
	 public $isNewRecord;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['notes'], 'string'],
            [['firstname', 'lastname', 'company', 'email_personal', 'email_work'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 25],
            [['position'], 'string', 'max' => 30],
            [['phone_home', 'phone_work', 'mobile', 'mobile2', 'fax'], 'string', 'max' => 20],
            [['address_home', 'address_work'], 'string', 'max' => 80],
            [['tags'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'title' => Yii::t('app', 'Title'),
            'position' => Yii::t('app', 'Position'),
            'company' => Yii::t('app', 'Company'),
            'phone_home' => Yii::t('app', 'Phone Home'),
            'phone_work' => Yii::t('app', 'Phone Work'),
            'mobile' => Yii::t('app', 'Mobile'),
            'mobile2' => Yii::t('app', 'Mobile2'),
            'fax' => Yii::t('app', 'Fax'),
            'email_personal' => Yii::t('app', 'Email Personal'),
            'email_work' => Yii::t('app', 'Email Work'),
            'address_home' => Yii::t('app', 'Address Home'),
            'address_work' => Yii::t('app', 'Address Work'),
            'notes' => Yii::t('app', 'Notes')
        ];
    }
}
