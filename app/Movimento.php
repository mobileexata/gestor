<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    protected $fillable = [
        'empresa_id', 'data', 'qtd_vendas', 'vl_total_vendas', 'pecas_vendidas', 'markup', 'clientes_identificados', 'ly',
    ];

    public function empresa()
    {
        return $this->hasMany(Empresa::class);
    }

}
