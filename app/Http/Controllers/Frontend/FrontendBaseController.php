<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendBaseController extends Controller
{
    function __loadDataToView($viewPath)
    {
        view()->composer($viewPath, function($view){
            $view->with('base_route',$this->base_route);
            $view->with('base_view',$this->base_view);
            $view->with('module',$this->module);

        });
        return $viewPath;
    }
}
