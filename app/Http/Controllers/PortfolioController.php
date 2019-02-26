<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;
/**
 * 
 */
class PortfolioController extends Controllers
{
    
    public function index()
    {
        // return Redis::view('portfolio', compact('portfolio'));
        // 
        $portfolios = Portfolio::all();
        return view('portfolio', compact('portfolios'));
        
    }
}