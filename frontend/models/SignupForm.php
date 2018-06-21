<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $First_name;
	public $Middle_name;
	public $Last_name;
	public $username;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
		
			['First_name', 'trim'],
            ['First_name', 'required'],
			['First_name', 'string', 'min' => 2, 'max' => 255],
			
			['Middle_name', 'trim'],
            ['Middle_name', 'required'],
			['Middle_name', 'string', 'min' => 2, 'max' => 255],
			
			['Last_name', 'trim'],
            ['Last_name', 'required'],
			['Last_name', 'string', 'min' => 2, 'max' => 255],
			
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
			
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

	public function attributeLabels()
    {
        return [
            'cap_user_fname' => 'First Name',
        ];
    }
	
	public function getcapUser()
    {
        return $this->hasMany(User::className(), ['cap_user_id' => 'id']);
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
		$user->fname = $this->First_name;
		$user->mname = $this->Middle_name;
		$user->lname = $this->Last_name;
		$user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        //$user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
