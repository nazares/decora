<?php

/**
 * User: nazareS
 * Date: 5/07/2023
 * Time: 4:57 PM
 */

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * 
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'nazareS'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        xdebug_var_dump($body);
        return "Handling submitted data";
    }
}
