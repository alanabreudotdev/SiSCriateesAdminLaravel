<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */

     public function __construct(){
        
     }
    public function index()
    {
        return view('admin.dashboard');
        
    }
}
