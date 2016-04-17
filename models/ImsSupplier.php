<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ims_supplier".
 *
 * @property integer $ims_supplierId
 * @property string $ims_supplierName
 * @property string $ims_supplierPhone
 * @property string $ims_supplierAddress
 * @property string $ims_supplierEmail
 */
class ImsSupplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['ims_supplierName', 'required', 'message' => 'Please Fill Supplier Name'],
            ['ims_supplierPhone', 'required', 'message' => 'Please Fill Supplier Phone Number'],
            [['ims_supplierName', 'ims_supplierPhone', 'ims_supplierAddress'], 'string', 'max' => 250],
            [['ims_supplierEmail'], 'string', 'max' => 200],
            [['ims_supplierOfficephone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ims_supplierId' => 'Ims Supplier ID',
            'ims_supplierName' => 'Vendor Name',
            'ims_supplierPhone' => 'Vendor Phone',
            'ims_supplierAddress' => 'Vendor Address',
            'ims_supplierEmail' => 'Vendor Email',
            'ims_supplierOfficephone'=>'Vendor Office Phone'
        ];
    }
}
