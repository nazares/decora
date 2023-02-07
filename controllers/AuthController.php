<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class AuthController extends Controller
{
    public function login()
    {
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'handle submitted data';
        }
        return $this->render('register');
    }
}
