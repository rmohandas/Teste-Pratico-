<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
    use SoftDeletes;

    protected $dates =['deleted_at'];
    protected $tabe = 'veiculos';
    protected $fillable = ['id', 'proprietario', 'modelo', 'marca', 'ano', 'renavam', 'placa'];

    
}
