<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atores;
use LaravelLegends\PtBrValidator\Rules\Cpf;

class AtoresController extends Controller
{
    public function atores(Request $request)
    {
        $atores = Atores::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('atores.index', compact('atores', 'mensagem'));
    }

    public function create(Request $request)
    {
        return view('atores.create');
    }

    public function store(Request $request)
    {

        if($this->validarCpf($request->all()['cpf'])) 
        {
            $atores = Atores::create($request->all());
            $request->session()->flash(
                "mensagem",
                "Autor com id {$atores->id_atores} adicionado com sucesso"
            );

            return redirect()->route('listar_atores');
        } else
        {   
            $request->session()->flash(
                "mensagemCpf",
                "Cpf invalido!"
            );
            
            $mensagemCpf = $request->session()->get('mensagemCpf');
            return view('atores.create', compact('mensagemCpf'));    
        }
            
    }

    public function destroy(Request $request)
    {
        Atores::destroy($request->id_atores);
        $request->session()->flash(
            'mensagemCpf',
            "Autor removido com sucesso"
       );
       return redirect()->route('listar_atores');
    }

    public function validarCpf(string $cpf)
    {
        $validarCpf = New Cpf();
        return $validarCpf->passes("", $cpf);

    }
}

?>