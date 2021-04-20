<?php

namespace app\controllers;

use app\models\Programador;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Yii;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionMatrix()
    {
        return $this->render('matrix');
    }

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
     * Lists all Programador models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Programador::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programador model.
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
     * Creates a new Programador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Programador();
        //Yii::$app->request->post() wrapper de Yii para obtener datos seguros enviados por POST
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Programador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave()
    {
        $success = false;
        $message = null;
        $errors = [];
        $model = new Programador();
        $model->dni = Yii::$app->request->post('dni');
        $model->name = Yii::$app->request->post('name');
        $model->email = Yii::$app->request->post('email');
        $model->last_name = Yii::$app->request->post('last_name');
        $model->languages = Yii::$app->request->post('languages');
        


        if (Programador::findOne(['dni' => $model->dni])){
            $errors []= 'Cedula ya existe';
        }
        if (Programador::findOne(['email' => $model->email])){
            $errors []= 'email ya existe';
        }
        
        if (sizeof($errors) < 1 ) {
            if ($model->save()) {
                $success = true;
                $message = 'Total de programadores registrados:' . Programador::find()->count();
            } else {
                $message = $model->getErrors();
            }
        } else {
            $message = $errors;
        }
        return json_encode(['success' => $success, 'message' => $errors ]);
    }

    /**
     * Updates an existing Programador model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Programador model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Programador model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Programador the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Programador::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
