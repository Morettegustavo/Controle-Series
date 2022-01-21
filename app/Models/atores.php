<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    public $timestamps = false;
    protected $fillable = ['cpf', 'nome'];

    protected $primaryKey = "id_atores";
}