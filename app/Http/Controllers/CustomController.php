<?php

namespace App\Http\Controllers;
use App\Facades\CustomFacade;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function greet($name)
    {
        $greeting = CustomFacade::greet($name);
        return $greeting;
    }
}
