<?php 

namespace Pozitivchik\Http\Controllers;

use Illminate\Http\Request;

/**
 * 
 */
class HomeController extends Controllers
{
    
    public function index()
    {
    # Section description
        Meta::set('title', 'You are at home');
        Meta::set('description', 'This is my home. Enjoy!');
        // Meta::set('image', asset('images/home-logo.png'));
        return Redis::view('welcome', compact('welcome'));
        
    }
}