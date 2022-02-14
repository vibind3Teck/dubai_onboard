<?php

namespace App\Controllers;
use App\Models\AuthModel;

class Auth extends BaseController
{


    public $model;
   
    public function __construct()
    { 
        helper(["url","form","file"]); 
        $this->model = new AuthModel();
        $this->session = session();
    }

    public function index()
    {
        
        return view('auth/login');
    }
    public function loginValidate()
    {   
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pwd');

        $data = $this->model->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            if(md5($password) === $pass){
               
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE,
                    'role' => $data['role'],
                ];
                $this->session->set($ses_data);
                if($ses_data['role'] == 1){
                    return redirect()->to('admin/');
                }
                else if($ses_data['role'] == 2){
                    return redirect()->to('manager/');
                }
                else if($ses_data['role'] == 3){
                    return redirect()->to('captian/');
                }

            }else{
                $this->session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('auth/');

            }
        }else{
            $this->session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('auth/');
            echo 'Email does not exist';
        }

    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('auth');
    }

    public function profile()
        {
             $data['session'] = $this->session->get();
             return view('auth/profile',$data);
        }

   
   
    
}
