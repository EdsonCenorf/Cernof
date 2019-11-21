<?php

namespace backend\controllers;

use Yii;
use backend\models\paciente;
use backend\models\pacienteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use kartik\mpdf\Pdf;

/**
 * PacienteController implements the CRUD actions for paciente model.
 */
class PacienteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all paciente models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new pacienteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model= Paciente::find();
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $model->count(),
        ]);
        $model=$model->orderBy(['data_at' => SORT_DESC,])->where(['estado' => 1])
                                                                    ->offset($pagination->offset)
                                                                    ->limit($pagination->limit)
                                                                    ->all();
        
        
                                                                    

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model'=>$model,
            'pagination'=> $pagination,
        ]);
    }

    /**
     * Displays a single paciente model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new paciente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new paciente();

        if ($model->load(Yii::$app->request->post())) {
            $model->estado = 1;
            $model->data_at = date('Y-m-d H:m:i');
            if( $model->save()){
                return $this->redirect(['view', 'id' => $model->id_paciente]);
            }else{
                echo "<pre>";
                print_r($model->getErrors());
                die;
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing paciente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_paciente]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing paciente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found*/
     
   
    public function actionDelete($id)
    {
     $model= Paciente::find()->where(['id_paciente'=>$id])->one();
     $model->estado=-1;
     $model->save(false);
     //$this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionActive($id)
    {
        $model= Paciente::find()->where(['id_paciente'=>$id])->one();
        $model->estado=0;
        $model->save(false);
       // $this->findModel($id)->active();
        return $this->redirect(['index']);
    }

    /**
     * Finds the paciente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return paciente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = paciente::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionViewPrivacy() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $pdf = new Pdf([
            'mode' => Pdf::MODE_CORE, // leaner size using standard fonts
            'destination' => Pdf::DEST_BROWSER,
            'content' => $this->renderPartial('privacy'),
            'options' => [
                // any mpdf options you wish to set
            ],
            'methods' => [
                'SetTitle' => 'Privacy Policy - Krajee.com',
                'SetSubject' => 'Generating PDF files via yii2-mpdf extension has never been easy',
                'SetHeader' => ['Krajee Privacy Policy||Generated On: ' . date("r")],
                'SetFooter' => ['|Page {PAGENO}|'],
                'SetAuthor' => 'Kartik Visweswaran',
                'SetCreator' => 'Kartik Visweswaran',
                'SetKeywords' => 'Krajee, Yii2, Export, PDF, MPDF, Output, Privacy, Policy, yii2-mpdf',
            ]
        ]);
        return $pdf->render('print');
    }
}
