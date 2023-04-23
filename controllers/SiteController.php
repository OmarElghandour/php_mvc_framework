<?php

namespace app\controllers;

use app\core\Request;
use app\models\RegisterModel;

class SiteController {

    public function create(Request $request)
    {
        \var_dump($request->getBody());

        $register = new RegisterModel();
        $register->loadData($request->getBody());
        $register->validate();

        \var_dump($register->errors);

        return 'some data';
    }

}