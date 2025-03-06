<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        echo "<h1>Index Method of Admin Controller</h1>";
    }

    public function add()
    {
        echo "<h1>Add Method of Admin Controller</h1>";
    }
}
