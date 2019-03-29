<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.03.2019
 * Time: 1:15
 */

namespace app\controllers;
use app\engine\Request;

use app\model\Users;


class UserController extends Controller
{

    public function actionLogin()
    {
        // Авторизуем пользователя
        
        // var_dump($submit);
        // die();
        
        $isSubmit = (new Request())->getParams()['submit'];

        if (isset($isSubmit)) {
            $login = (new Request())->getParams()['login'];
            $pass = (new Request())->getParams()['pass'];

         if (!Users::auth($login, $pass)) {
            Die("Неверный пароль!");
         } else
            header("Location: /");
        }
    }

    public function actionLogout() {
        session_destroy();
        header("Location: /");
    }

}