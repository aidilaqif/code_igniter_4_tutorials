<?php

namespace App\Controllers\Seller;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SellerController extends BaseController
{
    public function index()
    {
        echo "<h1>Index Method of Seller Controller</h1>";
    }

    public function add()
    {
        echo "<h1>Add Method of Seller Controller</h1>";
    }
}
