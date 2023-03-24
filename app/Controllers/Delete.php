<?php

namespace App\Controllers;
use App\models\AdmineModal;
use App\Controllers\BaseController;

class Delete extends BaseController
{
    public function delete($id)
    {
       $modal = new AdmineModal;
       if ($modal->delete($id)) {
         return redirect()->to('/ViewData');
       }
    }
}
