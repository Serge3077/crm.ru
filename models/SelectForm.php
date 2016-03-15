<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
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
            [['birth_date'], 'safe'],
            [['avatar'], 'file', 'extensions' => ['gif', 'jpg', 'png']],
            [['name', 'surname', 'middlename', 'city'], 'string', 'max' => 52],
            [['sex'], 'string', 'max' => 3],
            [['position', 'subdivision'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'name',
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


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $qq = UploadedFile::getInstance($this, 'avatar');
            if ($this->validate() && $qq instanceof UploadedFile) {
                $qq->saveAs(\Yii::getAlias('@webroot/ava') . DIRECTORY_SEPARATOR . $qq->baseName . '.' . $qq->extension, false);
                $this->avatar = '@web/ava' . DIRECTORY_SEPARATOR . $qq->baseName . '.' . $qq->extension;
            } else {
                $this->avatar = $this->getOldAttributes()['avatar'];
            }

            return true;
        } else {
            return false;
        }

    }
}

