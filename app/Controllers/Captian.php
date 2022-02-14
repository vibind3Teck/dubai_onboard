<?php

namespace App\Controllers;
use App\Models\AuthModel;

class Captian extends BaseController
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
        $data['session'] = $this->session->get();
        return view('captian/captian',$data);
    }
    public function profile()
        {
             $data['session'] = $this->session->get();
             return view('auth/profile',$data);
        }
}