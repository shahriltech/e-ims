<?php

namespace app\controllers;

use Yii;
use app\models\ImsReceiveProduct;
use app\models\ImsReceiveProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImsProduct;
/**
 * ImsReceiveProductController implements the CRUD actions for ImsReceiveProduct model.
 */
class ImsReceiveProductController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ImsReceiveProduct models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImsReceiveProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ImsReceiveProduct model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ImsReceiveProduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ImsReceiveProduct();

        $user = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post())) {

            $prodId = $_POST['ImsReceiveProduct']['ims_productId'];
            $count = count($prodId);
            
            for ($i=0; $i < $count; $i++) { 
                $model = new ImsReceiveProduct();
                $model->ims_dateInvoice = $_POST['ImsReceiveProduct']['ims_dateInvoice'];
                $model->ims_invoiceNo = $_POST['ImsReceiveProduct']['ims_invoiceNo'];
                $model->ims_dateCreate=date('d/m/Y');
                $model->ims_receiveBy = $user;
                
                $model2 = ImsProduct::find()
                        ->where(['ims_productId'=>$_POST['ImsReceiveProduct']['ims_productId'][$i]])
                        ->one();

                $qty = $model2->ims_totalProductQty + $_POST['ImsReceiveProduct']['ims_qtyRec'][$i];

                $model->ims_productId = $_POST['ImsReceiveProduct']['ims_productId'][$i];
                $model->ims_qtyRec = $_POST['ImsReceiveProduct']['ims_qtyRec'][$i];
                $model->ims_totalPrice = $_POST['ImsReceiveProduct']['ims_totalPrice'][$i];
                $model->ims_productDesc = $_POST['ImsReceiveProduct']['ims_productDesc'][$i];

                $model->save();

                $model2->ims_totalProductQty = $qty;
                $model2->save();
            }
            Yii::$app->getSession()->setFlash('addProduct', 'Product successfully saved');
            return $this->redirect(['ims-receive-product/index']);
            
        } else {
                return $this->render('create', [
                        'model' => $model,
                        
                ]);
        }
    }

    /**
     * Updates an existing ImsReceiveProduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ImsReceiveProduct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ImsReceiveProduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ImsReceiveProduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ImsReceiveProduct::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
