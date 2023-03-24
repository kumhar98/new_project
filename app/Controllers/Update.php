<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\AdmineModal;

class Update extends BaseController
{ 
    public function update(){
        $modal = new AdmineModal;
        $data = [];
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required|min_length[3]',
                'lname' => 'required|min_length[3]',
                'email'=> 'required|min_length[5]|valid_email|is_unique[admin.email,id,{id}]',
            ];
            if (!$this->validate($rules)) {
                 $data['validation']=$this->validator;
            }else {
                 $modal = new AdmineModal();

                 $newdata = [
                    'name' => $this->request->getvar('name'),
                    'lname' => $this->request->getvar('lname'),
                    'email' => $this->request->getvar('email'),
                    'id' => $this->request->getvar('id'),
                 ];
                if ( $modal->update($newdata['id'],$newdata)) {
                    echo 'pradeep';
                   $data['Flash_message'] = TRUE;
                   return redirect()->to('/ViewData');
                }

            }
 
    }
}
}