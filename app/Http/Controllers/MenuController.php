<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class MenuController extends Controller {
 
	public function Menu(){
		return view("menu");
	}
}