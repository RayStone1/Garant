<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ArmLoginForm extends Model
{
    public $arm;
    public $email_arm;
    public $password;
    public $rememberMe = true;

    private $_user = false;
    public function rules()
    {
        return [
            [['arm','email_arm','password'],'required'],
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],

        ];
    }
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Пользователь не найден.');
            }
        }
    }
    public function attributeLabels()
    {
        return [
            'arm' => 'АРМ',
            'email_arm' => 'Электронная почта',
            'password' => 'Пароль',
            'rememberMe' => 'Оставаться в системе',
        ];
    }
    public function login()
    {
        if ($this->validate()) {

            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    public function getUser()
    {

        if ($this->_user === false) {
            $this->_user = User::findByArm($this->arm,$this->email_arm);

        }

        return $this->_user;
    }
}