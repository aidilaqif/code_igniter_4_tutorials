<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\SiteController;
use App\Controllers\StudentController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get("index", [StudentController::class, "index"]);
// $routes->post("add", [StudentController::class, "add"]);

// $routes->match(["put","patch"], "update", [StudentController::class, "update"]);
// $routes->put("update", [StudentController::class, "update"]);
// $routes->patch("update", [StudentController::class, "update"]);
// $routes->delete("delete", [StudentController::class, "delete"]);

$routes->resource("employee");
