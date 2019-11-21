<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\paciente;
use backend\models\pacienteSearch;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */


     /**
   
    } */

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionOrtopidiaP()
    {
       
        //$searchModel = new pacienteSearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $model= paciente::find()->orderBy('data_at')->where(['estado' => 0])->all();

        return $this->render('ortopidia-p', [
            //'searchModel' => $searchModel,
          //  'dataProvider' => $dataProvider,
            'model'=>$model,
            
        ]);
       
        
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionActive($id)
    {
        $model= Paciente::find()->where(['id_paciente'=>$id])->one();
        $model->estado=1;
        $model->save(false);
       // $this->findModel($id)->active();
        return $this->redirect(['ortopidia-p']);
    }

    
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
