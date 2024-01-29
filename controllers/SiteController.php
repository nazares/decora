<?php

/**
 * User: nazareS
 * Date: 5/07/2023
 * Time: 4:57 PM
 */

namespace app\controllers;

use nazares\decoracore\Application;
use nazares\decoracore\Controller;
use nazares\decoracore\Request;
use nazares\decoracore\Response;
use app\models\ContactForm;
use nazares\decoracore\middlewares\AuthMiddleware;

/**
 * Class SiteController
 *
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function __construct()
    {
        $this->registerMidleware(new AuthMiddleware(['profile']));
    }

    public function home()
    {
        $params = [
            'name' => 'nazareS'
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for mailing me');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }

    public function profile(Request $request)
    {
        echo '<pre>';
        var_dump($request->getRouteParam('id'));
        echo '</pre>';
        return $this->render('profile');
    }

    public function profileWithId(Request $request)
    {
        echo '<pre>';
        var_dump($request->getBody());
        echo '</pre>';
    }
}
