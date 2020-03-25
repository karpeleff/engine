<?php

namespace  App;

use \App\Models\Dizelwork;

use App\View;

use App\Application;

class StoreController
{
	public function  index()
    {

      View::render('store.test');
    }

    public function  add()
    {
     // $record = User::Create(['name' => $_POST['test'], 'email' => "ahmed.khan@lbs.com",    'password' => "password", ]);

       // Application::dump($_POST);
        //echo dirname(__FILE__);

      //  require_once 'migrations/dizelworks.php'; //это была миграция 


require_once 'models/Connection.php';

        Dizelwork::Create(['start' => $_POST['start'],'stop' => $_POST['stop'],'dizname' => $_POST['dizname'],'zapusk' => $_POST['zapusk'],]);

//http_redirect('/store/index');
        header("Location:/store/index");
        exit;

    }



	
}