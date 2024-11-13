<?php
namespace App\Controllers;

use App\Core\App;
use Exception;

class Controller
{
    public function exibirLogin()
    {
        return view('admin/login');
    }

    public function exibirDashboard()
    {
        return view('admin/dashboard');
    }
}
?>