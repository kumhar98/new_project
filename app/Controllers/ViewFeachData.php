<?php 
namespace App\Controllers;
use App\models\AdmineModal; 

class ViewFeachData extends BaseController
{
    function ViewData(){
        $modal = new AdmineModal;
        $data['UserData'] =  $modal->findAll();
        return view('ViewData', $data);
    }
}

 