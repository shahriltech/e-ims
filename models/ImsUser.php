<?php

namespace app\models;

use Yii;
use app\models\ImsRole;
/**
 * This is the model class for table "ims_user".
 *
 * @property integer $id
 * @property string $kims_fname
 * @property string $kims_lname
 * @property string $kims_address
 * @property string $kims_phone
 * @property integer $role
 * @property string $kims_nickname
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $status
 * @property string $email
 */
class ImsUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['ims_fname', 'required', 'message' => 'Please Fill Your Full Name'],
            ['role', 'required', 'message' => 'Please Fill Your Role'],
            ['password_hash', 'required', 'message' => 'Please Fill Your Password'],
            ['ims_nickname', 'required', 'message' => 'Please Fill Your Nickname'],
            [['role', 'status'], 'integer'],
            [['ims_fname', 'email'], 'string', 'max' => 250],
            [['ims_address'], 'string', 'max' => 300],
            [['ims_phone', 'auth_key'], 'string', 'max' => 50],
            [['ims_nickname'], 'string', 'max' => 100],
            [['password_hash'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ims_fname' => 'Fullname',
            'ims_address' => 'Address',
            'ims_phone' => 'Phone Number',
            'role' => 'Role',
            'ims_nickname' => 'Nickname',
            'password_hash' => 'Password',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'email' => 'Email',
        ];
    }
    public function getRolename()
    {
        return $this->hasOne(ImsRole::className(),['ims_roleId' =>'role']);
    }
}
