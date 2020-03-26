<?php

namespace  App;

//use Illuminate\Database\Capsule\Manager as Capsule;

use \App\Models\Dizelwork;

use \App\Models\Benzin;

use App\View;

use App\Application;

class OprsController
{
    public function  index()
    {

        View::render('oprs.index');

    }

    public function migration()
    {

        require_once 'models/Connection.php';

        require_once 'migrations/benzin.php';

    }

    public function  addbenz()
    {


//Application::dump($_POST);

//exit;


        require_once 'models/Connection.php';

        Benzin::Create(['date' => $_POST['date'],
                'admission' => '33',
                'consumtion' => '33',
                'type' => $_POST['type'],
                'balance' => '75']
        );




        $this->benzform();

    }


    public   function  benzform()
    {

        View::render('oprs.benzac');
    }

}