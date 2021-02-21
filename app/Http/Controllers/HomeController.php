<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->rol == 0){
            return view('admin');
        }
        else{
            return view('home');
        }
    }
    
    public function sell(){
        return view('sell');
    }

    public function employees(){
        return view('employees');
    } 

    public function products(){
        return view('products');
    } 

    public function modifyE(){
        return view('modifyE');
    } 
    
    public function modifyP(){
        return view('modifyP');
    } 

    public function addEmployees(){
        return view('addEmployees');
    } 

    public function addProducts(){
        return view('addProducts');
    } 
}
