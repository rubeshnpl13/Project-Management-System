<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

class DashboardController extends BackendBaseController
{
    protected $base_route = 'backend.dashboard.';
    protected $base_view = 'backend.dashboard.';
    protected $module = 'Dashboard';
    public function __construct()
    {
//        $this->model= new DashboardController();
    }
    public function index()
    {
        return view($this->__loadDataToView($this->base_view.'dashboard'));
    }
}
