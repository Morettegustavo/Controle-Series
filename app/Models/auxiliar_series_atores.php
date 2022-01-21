<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Auxiliar_series_atores extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_series',  'id_atores'];
    protected $table = "Auxiliar_series_atores";

    public function SeriesAtores()
    {
        return DB::table('auxiliar_series_atores')
            ->join('atores', 'atores.id_atores', '=', 'auxiliar_series_atores.id_atores')
            ->join('series', 'series.id_series', '=', 'auxiliar_series_atores.id_series')
            ->select('cpf','atores.nome as nomeator', 'data', 'series.nome as nomeseries')
            ->get();


        /* return DB::select('select a.cpf, a.nome "nomeator", s.data, s.nome "nomeseries" from auxiliar_series_atores asa inner join atores as a on a.id_atores = asa.id_atores inner join series as s on s.id_series = asa.id_series'); */
        
    }

}

?>

