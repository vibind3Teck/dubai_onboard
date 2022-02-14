<?php

namespace App\Controllers;
use App\Models\AuthModel;

class Admin extends BaseController
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
        return view('admin/admin',$data);
    }
    public function addManager()
    {
        $data['session'] = $this->session->get();
        return view('admin/add-manager',$data);
    }
   
}