<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * 
 */
class PortfolioController extends Controllers
{
    
    public function index()
    {
    // Section description
        # Section description
        Meta::set('title', 'You are at home');
        Meta::set('description', 'This is my home. Enjoy!');
        // Meta::set('image', asset('images/home-logo.png'));
        return Redis::view('portfolio', compact('portfolio'));
        
    }
}