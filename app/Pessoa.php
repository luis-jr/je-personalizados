<?php

namespace systemJE;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $primaryKey = 'idpessoas';

    public $timestamps = false;
    protected $fillable = [
        'tipo_pessoa',
        'nomes',
        'tipo_documento',
        'num_documento',
        'endereco',
        'telefone',
        'email',
    ];

    protected $guarded = [];
}
