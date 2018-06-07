<?php 
    namespace app\controllers;
    use yii\web\Controller;
    use app\models\Products;

    class ProjectController extends Controller{
        public function actionIndex(){
         //   $products = Products::find()->all();
         //$products = Products::find()->where('kind_id = 4')->all();
       //  $products = Products::find()->from('catalogs')->all();
            return $this->render('index',['products'=>$products]);
        }



    }

?>