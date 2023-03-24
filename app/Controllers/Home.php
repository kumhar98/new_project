<?php

namespace App\Controllers;
use App\models\AdmineModal; 

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this->request->is('post')) {
             $rules = [
                 'password' => 'required|min_length[5]',
                 'email'=> 'required|min_length[5]|valid_email', 
             ];
             $errors=[
                     'password'=> [
                         'validateuser'=>'Email id and password don\'t match '
                     ]
                 ];
            if (!$this->validate($rules, $errors)) {
                $data['validation']=$this->validator; 
                
           }else {
                     $modal = new AdmineModal();
                     if ( $data = $modal->where('email',$this->request->getvar('email'))->first()) {
                        if ($this->varifypassword($this->request->getvar('password'),$data['password'])) {
                            if ($this->SetSession($data)) {
                            
                               return redirect()->to('dashboard');
                            }
                         }else {
                            $data['PassworEmailErrrors'] = TRUE; 
                         }
                     }else {
                        $data['PassworEmailErrrors'] = TRUE; 
                     }   
                 }
           
                
          }
          return view('welcome_message', $data);
    }
    public function signup()
    {
        $data = [];
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required|min_length[5]',
                'lname' => 'required|min_length[5] ',
                'password' => 'required|min_length[5]',
                'ConfirmPassword' => 'required|matches[password]',
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
                    'password' => $this->request->getvar('password'),
                 ];
                if ( $modal->save($newdata)) {

                   $data['Flash_message'] = TRUE;
                   return view('welcome_message');  
                }

            }
        }
        return view('signup',$data);

    }
    public function dashboard()
    {
        return view('dashboard');
    }

    private function varifypassword($EnterPassword,$AdminPassword){
        return password_verify($EnterPassword,$AdminPassword);
    }
    private function SetSession($data){
        $data = [
            'id'=> $data['id'],
            'name'=> $data['name'],
            'lname'=> $data['lname'],
            'email'=> $data['email'],
            'isLoggedIn'=> true,
            
        ];

        session()->set($data);
        return true;
    }
    function LogOut(){
        session()->destroy();
        return redirect()->to('/');
    }
}
