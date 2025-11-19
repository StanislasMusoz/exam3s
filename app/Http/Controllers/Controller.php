<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function Psy\sh;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return $this->show();
    }

    public function show(){
        return view('controller.index');
    }

    public function submit(){
        $name = request("nom");
        $password = request("password");
        $commentaire = request("commentaire");
        return view('controller.index',[
            "name" => $name ,
            "password" => $password ,
            "commentaire" => $commentaire
        ]);
    }
}
