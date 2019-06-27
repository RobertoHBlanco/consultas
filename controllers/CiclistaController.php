<?php

namespace app\controllers;

use Yii;
use app\models\Ciclista;
use app\models\CiclistaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * CiclistaController implements the CRUD actions for Ciclista model.
 */
class CiclistaController extends Controller
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
     * Listar todos los ciclistas
     * utilizando ActiveRecord
     * @return type view
     */
    public function actionConsulta(){
        
//        ej1.
//        $a = new ciclista();
//        $a->dorsal=1222;
//        $a->save();
        
        //Para hacer un listado no es necesario crear un objeto Ciclista
        //en este caso necesito un metodo del ciclista pero estatico
        //hariamos esto generar un objeto de tipo consulta el objeto find()
        //find prepara la consulta y all() la ejecuta. $ciclistas tendria un array de ciclistas como objetos, en el array 0 estaria el ciclista 1 en el 1 el ciclista 2.......
        
    //select * from ciclista    
    $consulta = Ciclista::find();
    
  
   //ActiveQueryInterface hereda de ActiveQuery su papi 
    
      // ActiveRecord
    
     $dataProvider = new ActiveDataProvider([
         'query' => $consulta,
        
     ]);
     
     return $this->render('index_1', [
        'datos' => $dataProvider, 
         
     ]);
    
    
//    echo "<pre>";
//    var_dump($ciclistas);//
//    echo "</pre>";
    
//    echo $ciclistas[0]->nombre;
//    $ciclistas[0]->edad = 32;
//    $ciclistas[0]->save();
//        echo $ciclistas[0]->edad;
        
        
        
    }
    /**
     * Lists all Ciclista models.
     * @return mixed
     */
    
    public function actionConsulta1(){
 
        $consulta = Ciclista::find()->select("edad")->distinct();

         $dataProvider = new ActiveDataProvider([
             'query' => $consulta,
         ]);

         return $this->render('index_2', [
            'datos' => $dataProvider, 
         ]);
        
    }
     public function actionConsulta2(){
 
        $consulta = Ciclista::find()->select("edad")->distinct()->where("nomequipo = 'Artiach'");

         $dataProvider = new ActiveDataProvider([
             'query' => $consulta,
         ]);

         return $this->render('index_3', [
            'datos' => $dataProvider, 
         ]);
        
    }
    public function actionIndex()
    {
        $searchModel = new CiclistaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ciclista model.
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
     * Creates a new Ciclista model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ciclista();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dorsal]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ciclista model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dorsal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ciclista model.
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
     * Finds the Ciclista model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ciclista the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ciclista::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
