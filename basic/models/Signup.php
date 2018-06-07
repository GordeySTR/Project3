<?php 

namespace app\models;
use yii\base\Model;

class Signup extends Model {
    public $email;
    public $pass;
    public function rules(){
        return [
            [['email','password'],'requered'],
            ['email','email'],
            ['email','unique','targetClass'=>'app\models\Users'],
            ['password','string','min'=>2,'max'=>10]
        ];
    }

    public function signup(){
        $user = new Users();
        $user->email = $this->email;
        $user->pass = $this->pass;
        return $user->save();
    }
}