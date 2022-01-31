<?php
namespace App\Controllers;

class HomeController extends Controller
{


    public function home()
    {
        $this->render(title: "home", description: "home page", path: "frontend/home");
    }

    public function tuto()
    {
        $this->render(title: "tuto", description: "tuto page", path: "frontend/tuto");
    }

    
}
