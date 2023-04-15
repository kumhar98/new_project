<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\AdmineModal;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\UserModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class Xl extends BaseController
{

 
  public function excel() {
    $modal = new AdmineModal;
  
      $query =  $modal->findAll();

      $fileName = 'users.xls';  
      $spreadsheet = new Spreadsheet();
 
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'Id');
      $sheet->setCellValue('B1', 'Name');
      $sheet->setCellValue('C1', 'Last Name');
      $sheet->setCellValue('D1', 'Email');
      $sheet->setCellValue('E1', 'created_at');
      $sheet->setCellValue('F1', 'updated_at'); 
      $sheet->setCellValue('G1', 'image');       
      $rows = 2;
 
      foreach ($query as $val){
          $sheet->setCellValue('A' . $rows, $val['id']);
          $sheet->setCellValue('B' . $rows, $val['name']);
          $sheet->setCellValue('C' . $rows, $val['lname']);
          $sheet->setCellValue('D' . $rows, $val['email']);
          $sheet->setCellValue('E' . $rows, $val['created_at']);
          $sheet->setCellValue('F' . $rows, $val['updated_at']);
          $sheet->setCellValue('G' . $rows, $val['image']);
          $rows++;
      } 
      $writer = new Xlsx($spreadsheet);
        $writer->save($fileName);
       

       header("Content-Type: application/vnd.ms-excel");
       header("Content-Disposition: attachment; filename= ".basename($fileName)."");
       header("Expires: 0");
       header("Pragma: public");
       header("cache-control:must-revalidate");
       header("content-length:". filesize($fileName));
       flush();
       readfile($fileName);      
}
  }