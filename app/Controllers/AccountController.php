<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Controllers\BaseController;

class Account extends BaseController
{
    public function index()
    {
        return view('account/login');
    }

} 