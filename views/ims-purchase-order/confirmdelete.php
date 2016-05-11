<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ImsProduct;
use app\models\ImsSupplier;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\ImsRole */
/* @var $form yii\widgets\ActiveForm */

?>

            <p> Would you like to delete this item ? </p>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                <?= Html::a('Delete', ['ims-purchase-order/delete','id'=>$model->ims_purchaseId], ['class' => 'btn red btn-outline','data-method' => 'post']) ?>
            </div>
