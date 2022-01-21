<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auxiliar_series_atores;


class HomeController extends Controller
{
    public function home(Request $request)
    {


        $new_serie_ator = new Auxiliar_series_atores();
        $series_atores = $new_serie_ator->SeriesAtores();
        
        
        return view('home.index', compact('series_atores'));
    }

    
   
    
}



?>

