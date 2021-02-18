<?php

namespace backend\controllers;

use Yii;
use common\models\Nomzodlar;
use common\models\NomzodlarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NomzodlarController implements the CRUD actions for Nomzodlar model.
 */
class NomzodlarController extends Controller
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
     * Lists all Nomzodlar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NomzodlarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionYangiNomzodlar(){
        $model = Nomzodlar::find()->where(['status' => 0])->all();

        return $this->render('yangi-nomzodlar', [
            'model' => $model,
        ]);
    }
    public function actionInterviyuNom(){
        $model = Nomzodlar::find()->where(['status' => 1])->all();

        return $this->render('interviyu-nom', [
            'model' => $model,
        ]);
    }
    public function actionQabQilNom(){
        $model = Nomzodlar::find()->where(['status' => 10])->all();

        return $this->render('qab-qil-nom', [
            'model' => $model,
        ]);
    }
    public function actionQabQilinmaganNom(){
        $model = Nomzodlar::find()->where(['status' => 20])->all();

        return $this->render('qab-qilinmagan-nom', [
            'model' => $model,
        ]);
    }

    public function actionReadMessage($id){
        $model = Nomzodlar::findOne(['id' => $id]);

        return $this->render('read-message',[
            'model' => $model,
        ]);
    }
    /**
     * Displays a single Nomzodlar model.
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
     * Creates a new Nomzodlar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nomzodlar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Nomzodlar model.
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
     * Deletes an existing Nomzodlar model.
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
     * Finds the Nomzodlar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nomzodlar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nomzodlar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
