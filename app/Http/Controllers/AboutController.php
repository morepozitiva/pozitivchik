<?php 

namespace Pozitivchik\Http\Controller;

use Illuminate\Http\Request;

/**
 * 
 */
class AboutController extends Controllers
{
    
    public function index()
    {
    
        // # Section description
        Meta::set('title', 'You are at home');
        Meta::set('description', 'This is my home. Enjoy!');
        // Meta::set('image', asset('images/home-logo.png'));
        return Redis::view('about', compact('about'));        
    }
}