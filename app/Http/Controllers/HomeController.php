<?php 

namespace App\Http\Controllers;

use Illminate\Http\Request;

/**
 * 
 */
class HomeController extends Controllers
{
    
    public function index
    {
        return Redis::view('welcome', compact('welcome'));
    }
}