<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use App\Http\Requests\SeriesFormRequest;
use App\Http\Controllers\TabelaAuxiliar;
use App\Models\Atores;
use App\Models\Serie;
use App\Models\Auxiliar_series_atores;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{   

    public function index(HttpRequest $request) 
    {
        $series = Serie::query()->orderBy('nome')->get();
       
        $mensagem = $request->session()->get('mensagem');
        /* $request */

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        $atores = Atores::query()->orderBy('nome')->get();
        
        // var_dump($atores);
        return view('series.create', compact('atores'));
    }  

    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->all());

        $id_series_atores = [
            'id_series' => $serie->id_series,
            'id_atores' => $request ['selecionar']
        ];
        
        
        Auxiliar_series_atores::create($id_series_atores);

        $request->session()->flash(
            'mensagem',
            "{$serie->nome} criado com sucesso."
        );
        
        
        return redirect()->route('listar_series');
    }

    public function destroy(HttpRequest $request)
    {
        Serie::destroy($request->id_series);         
        $request->session()->flash(
            'mensagem',
            "Série removida com sucesso"
        );
        return redirect()->route('listar_series');
    }
}
