<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller{
    @return void
    
    public function_construct(){
        $this->middleware('auth');
    }

    @return \Illuminate\Contracts\Support\Renderable
    public function index(){
        return view('index-me-header');
    }
}

?>