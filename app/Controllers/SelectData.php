<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\AdmineModal;

class SelectData extends BaseController
{   public function selectUserData($id)
    {
        $modal = new AdmineModal;
     if ( $data['userData'] = $modal->where('id',$id)->first()) {
         return view('update',$data);
       }else {
         $data['Flash_message']="Something is Wrong";
       }
    }
}
