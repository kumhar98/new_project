<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\Files\File;

use App\models\AdmineModal;

class UploadImage extends BaseController
{  protected $helpers = ['form'];

    // public function UploadImage()
    // {
    //     return view('upload_form', ['errors' => []]);
    // }

    public function UploadImage($id)
    
    {
        echo $id;
        return view('addImage');
        exit();
        $data =[];
        helper('form');
        $validationRule = [
            'imageName' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[imageName]',
                    'is_image[imageName]',
                    'mime_in[imageName,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    // 'max_size[imageName,100]',
                    // 'max_dims[imageName,1024,768]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
             return view('addImage', $data);
        }
      
        $img = $this->request->getFile('imageName');        
        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/image' . $img->store();
            $data = ['uploaded_fileinfo' => new File($filepath)];
            $fileName = esc(  $data['uploaded_fileinfo']->getBasename());
            $imageData = [
                'image'=>$fileName
            ];
            $modal = new AdmineModal();
            if ($modal->update($id,$imageData)) {
                return redirect()->to('ViewData');
            }

           
        }

        $data = ['errors' => 'The file has already been moved.'];

         return view('addImage', $data);
    }
}
