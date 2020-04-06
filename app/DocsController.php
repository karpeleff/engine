<?php

namespace  App;

//use Illuminate\Database\Capsule\Manager as Capsule;

use DateTime;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//use Phpoffice\Phpspreadsheet\Reader\IReadFilter;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

use Carbon\Carbon;

use \App\Models\Dizelwork;

use \App\Models\Benzin;

use App\View;

use App\Application;





class DocsController
{
	public function  index()
    {
        echo 'докс индекс';
    }

public function  parserXls()
{

    $inputFileType = 'Xlsx';
    $inputFileName = 'sampleData/4_kv.xlsx';
    $sheetname = 'Data Sheet #1';


   // $helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory with a defined reader type of ' . $inputFileType);
    $reader = IOFactory::createReader($inputFileType);
   // $helper->log('Turning Formatting off for Load');
    $reader->setReadDataOnly(true);
    $spreadsheet = $reader->load($inputFileName);

    $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
   // var_dump($sheetData);

    $output = json_encode($sheetData) ;

    file_put_contents('tempdata/4_kv.txt',$output);

}

public function employerStatus()

{


    $file = file_get_contents('tempdata/4_kv.txt');

    $file = json_decode( $file,true);

    $file = array_slice($file,15,17);

    foreach ($file as $key=>$value)
    {
       // $item = array_slice($item,0,36);
      $new[]  =  $value = array_values($value);
       // echo $value['C'] ;

    }


    foreach ($new as $key=>$value)
    {
    $itog[] =  $value = array_slice($value,2,32);
    }
    $itog = json_encode($itog) ;
    file_put_contents('tempdata/emp/4_kv.txt',$itog);

//var_dump($itog);



  // echo Application::dump($file);

   //echo gettype($file);
    //var_dump($file);


}
public  function workShift()
{
    $file = file_get_contents('tempdata/emp/2_kv.txt');

    $file = json_decode( $file,true);
    var_dump($file);
echo '<br>';
    echo $file[0][0];//месяц
    echo '<br>';
    echo $file[1][0];//фамилия
    echo '<br>';
    echo $file[6][0];//месяц
    echo '<br>';
    echo $file[1][1];//смена


}



public  function  workShiftview()
{
    View::render('oprs.workShift');
}
    public  function getTuesday($year,$month): array
    {
        $instans = new DateTime();

        $instans->setDate($year,$month, 1);

        $lastDay  = $instans->format('t');

        $tuesday = [];

        for($i = 1; $i <= $lastDay;$i++ )
        {
            $instans->setDate($year,$month,$i);

            if($instans->format('N') == 2){
                $tuesday[] = $i;
            }

        }

        return  $tuesday;

    }

public function  getDate()
{
   $out =  $this->getTuesday(2020,11);

   var_dump($out);

}

}