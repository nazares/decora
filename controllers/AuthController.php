<?php

/**
 * User: nazareS
 * Date: 5/07/2023
 * Time: 5:33 PM
 */

namespace app\controllers;

use nazares\decoracore\Application;
use nazares\decoracore\Controller;
use nazares\decoracore\middlewares\AuthMiddleware;
use nazares\decoracore\Request;
use nazares\decoracore\Response;
use app\models\LoginForm;
use app\models\User;

/**
 * Class AuthController
 *
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMidleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }
    public function register(Request $request)
    {
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for the registration');
                Application::$app->response->redirect("/");
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile');
    }
}
