<?php 
    namespace app\controllers;
    use yii\web\Controller;
    use app\models\Products;
    use app\models\Signup;
    class ProjectController extends Controller{
        public function actionIndex(){
            $products = Products::find()->all();
        // $products = Products::find()->where('kind_id = 4')->all();
       //  $products = Products::find()->from('catalogs')->all();
            return $this->render('index',['products'=>$products]);
        }
        public function actionSignup(){
            $model = new Signup();

            if(isset($_POST['Signup'])){
               $model->attributes = Yii::$app->request->post('Signup');

                if($model->validate() && $model->signup()){
                    
                   return $this->goHome();
                }

            }

            return $this->render('signup',['model'=>$model]);
        }

        



    }

?>