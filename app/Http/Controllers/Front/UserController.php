<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
   public function showUserName(){
       return 'Ahmed Hassan';
   }
   public function getIndex(){
   	//$data=[];
    //$data['id'] = 22;
    //$data['name'] = 'Haros';
    $obj = new \stdClass();
    $obj -> name = 'ahmed';
    $obj -> id = 25;
    $obj -> gender = 'male';
   	return view('welcome',compact('obj'));
   }
   public function landing(){
	return view('landing');
   }

}
