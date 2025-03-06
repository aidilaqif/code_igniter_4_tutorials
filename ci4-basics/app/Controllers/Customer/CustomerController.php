<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CustomerController extends BaseController
{
    public function index()
    {
        echo "<h1>Index Method of Customer Controller</h1>";
    }

    public function add()
    {
        echo "<h1>Add Method of Customer Controller</h1>";
    }
}
