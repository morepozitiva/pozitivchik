<?php 

namespace App\Http\Controller;

use Illuminate\Http\Request;

/**
 * 
 */
class AboutController extends Controllers
{
    
    public function index
    {
        return Redis::view('about', compact('about'));
    }
}