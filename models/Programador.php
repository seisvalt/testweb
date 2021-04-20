<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programador".
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string|null $dni
 * @property string|null $email
 * @property string|null $languages
 * @property string $createdAt
 * @property string $updatedAt
 */
class Programador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name',  'dni', 'email'], 'required'],
            [['languages'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'last_name', 'dni', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'dni' => Yii::t('app', 'Dni'),
            'email' => Yii::t('app', 'Email'),
            'languages' => Yii::t('app', 'Languages'),
            'createdAt' => Yii::t('app', 'Created At'),
            'updatedAt' => Yii::t('app', 'Updated At'),
        ];
    }
}
