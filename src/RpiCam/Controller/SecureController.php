<?php
namespace RpiCam\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class SecureController
{
    public function actionPreview(Request $request, Application $app)
    {
        return $app['twig']->render('home.html', array(
            //'name' => $name,
        ));
    }

    public function actionListSaved(Request $request, Application $app)
    {
        return 'List of all saved stills and videos2';
    }

    public function actionDeleteSaved(Request $request, Application $app)
    {
        return 'Deleting stills and videos3';
    }
}