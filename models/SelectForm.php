<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $middlename
 * @property string $sex
 * @property string $birth_date
 * @property string $city
 * @property string $position
 * @property string $subdivision
 * @property string $avatar
 */
class SelectForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['name', 'surname', 'middlename', 'sex', 'birth_date', 'city', 'position', 'subdivision'], 'safe'],
            // [['birth_date'], 'safe'],
            [['avatar'], 'file', 'extensions' => ['gif', 'jpg']],
            /**[['name', 'surname', 'middlename', 'city'], 'string', 'max' => 52],
            //[['sex'], 'string', 'max' => 3],
            //[['position', 'subdivision'], 'string', 'max' => 100],**/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'middlename' => 'Отчество',
            'sex' => 'Пол',
            'birth_date' => 'Дата рождения',
            'city' => 'Город',
            'position' => 'Должность',
            'subdivision' => 'Подразделение',
            'avatar' => 'Avatar',
        ];
    }
}
