<?php

/**
 * User: nazareS
 * Date: 5/07/2023
 * Time: 5:33 PM
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class AuthController
 * 
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "Handle submitted data";
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}
