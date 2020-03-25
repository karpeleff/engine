<?php

namespace  App;

use eftec\bladeone\BladeOne;

include "../lib/BladeOne.php";

class View
{

	public function  render($view)
    {
        $views = __DIR__ . '/views';
        $compiledFolder = __DIR__ . '/compiled';
        $blade=new BladeOne($views,$compiledFolder,BladeOne::MODE_DEBUG);
        try {
            echo $blade->run($view
                , ['data' => $data]);

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }



	
}