<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ims_role".
 *
 * @property integer $kims_roleId
 * @property string $kims_roleName
 */
class ImsRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_roleName'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ims_roleId' => 'ims Role ID',
            'ims_roleName' => 'Role Name',
        ];
    }
}
