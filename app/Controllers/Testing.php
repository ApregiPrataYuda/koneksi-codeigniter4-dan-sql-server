<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TestingModel;
class Testing extends BaseController
{
       protected $TestingModel; 
     public function __construct() {
        $this->TestingModel = new TestingModel();
     }

    public function index()
    {
        $getdata = $this->TestingModel->findAll();
        dd($getdata);
    }
}
