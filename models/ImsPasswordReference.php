<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ims_passwordReference".
 *
 * @property integer $kims_passrefId
 * @property string $kims_password
 * @property integer $kims_userid
 */
class ImsPasswordReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_passwordReference';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_userid'], 'integer'],
            [['ims_password'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ims_passrefId' => 'ims Passref ID',
            'ims_password' => 'ims Password',
            'ims_userid' => 'ims Userid',
        ];
    }
}
