<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    // GET
    public function index()
    {
        echo "<h1>Index Method Using GET Request Method</h1>";
    }
    // POST
    public function add()
    {
        echo "<h1>Index Method Using POST Request Method</h1>";
    }
    // PUT / PATCH
    public function update()
    {
        echo "<h1>Index Method Using PUT / PATCH Request Method</h1>";
    }
    // DELETE
    public function delete()
    {
        echo "<h1>Index Method using DELETE Request Method</h1>";
    }
}
