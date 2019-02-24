<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * 
 */
class PortfolioController extends Controllers
{
    
    public function index
    {
        return Redis::view('portfolio', compact('portfolio'));
    }
}