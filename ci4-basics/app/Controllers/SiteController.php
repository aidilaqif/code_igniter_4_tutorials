<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    public function index()
    {
        $data = [
            "name" => "Sanjay",
            "email" => "sanjay@gmail.com"
        ];

        $name = "Sanjay";
        $email = "sanjay@gmail.com";

        return view("pages/site_index_page", compact("name", "email"));
    }

    // Accept Roll Numbers
    public function getRollNumber($roll, $name)
    {
        $roll_number = $roll;

        echo "<h1>Roll Number: ". $roll_number." and Name: {$name}</h1>";
    }

    // Get Student Name
    public function getStudentName($name)
    {
        echo "<h1>Student Name: $name</h1>";
    }

    public function getNameIDValue($data)
    {
        echo "<h1>{$data}</h1>";
    }

    public function productInfo()
    {
        // $productId = $this-> request->getVar("id");
        // $productName = $this-> request->getVar("name");
        // echo "<h1>Welcome To Product Page {$productId} and {$productName}</h1>";

        // print_r($this->request->getVar());
    }
}
