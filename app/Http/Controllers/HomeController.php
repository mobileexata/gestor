<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $datasValues;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->datasValues = [
            'hoje' => [
                date('Y-m-d'),
                date('Y-m-d')
            ],
            'ontem' => [
                date('Y-m-d', time() - 60*60*24),
                date('Y-m-d', time() - 60*60*24)
            ],
            'semana-passada' => [
                date('Y-m-d', time() - 60*60*24*7),
                date('Y-m-d', time() - 60*60*24*7)
            ],
            'mês-atual' => [
                date('Y-m') . '-01',
                date('Y-m-d')
            ],
            'mês-passado' => [
                date('Y-m-d', time() - 60*60*24*30),
                date('Y-m-d', time() - 60*60*24*30)
            ],
            'mês-passado-completo' => [
                date('Y-m-', time() - 60*60*24*30) . '01',
                date('Y-m-d', strtotime(date('Y-m-') . '01') - 60*60*24*1)
            ],
            'ano-passado' => [
                date('Y-m-d', time() - 60*60*24*365),
                date('Y-m-d', time() - 60*60*24*365)
            ]
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($filtros = ['data' => 'hoje'])
    {
        $filtros['data'] = (isset($filtros['data'])) ? $filtros['data'] : 'hoje';
        $empresas = Auth::user()->empresas()->get();

        if (isset($filtros['slug']))
            $empresasMovimentos = Auth::user()->empresas()->whereSlug($filtros['slug'])->get();
        else
            $empresasMovimentos = $empresas;

        $totais = [
            'datasFiltros' => ['hoje', 'ontem', 'semana-passada', 'mês-atual', 'mês-passado', 'mês-passado-completo', 'ano-passado'],
            'slug' => (isset($filtros['slug'])) ? $filtros['slug'] : null,
            'data' => $filtros['data'],
            'qtd_vendas' => 0,
            'vl_total_vendas' => 0,
            'ticket_medio' => 0,
            'pecas_vendidas' => 0,
            'pecas_atendimento' => 0,
            'markup' => 0,
            'clientes_identificados' => 0,
            'p_clientes_identificados' => 0,
            'ly' => 0,
            'dt_li' => 'N/A',
        ];

        foreach ($empresasMovimentos->all() as $e)
        {
            $movimento = $e->movimentos()->whereBetween('data', $this->datasValues[$filtros['data']])->get();
            foreach ($movimento as $m)
            {
                $totais['qtd_vendas'] += $m->qtd_vendas;
                $totais['vl_total_vendas'] += $m->vl_total_vendas;
                $totais['pecas_vendidas'] += $m->pecas_vendidas;
                $totais['markup'] += $m->markup;
                $totais['clientes_identificados'] += $m->clientes_identificados;
                $totais['ly'] += $m->ly;
            }
        }

        $totais['dt_li'] = ($this->datasValues[$totais['data']][0] !== $this->datasValues[$totais['data']][1]) ?
            date('d/m', strtotime($this->datasValues[$totais['data']][0]) - 60 * 60 * 24 * 365) . ' - ' . date('d/m/Y', strtotime($this->datasValues[$totais['data']][1]) - 60 * 60 * 24 * 365):
            date('d/m/Y', strtotime($this->datasValues[$totais['data']][0]) - 60 * 60 * 24 * 365);

        if (!empty($totais['qtd_vendas']))
        {
            $totais['p_clientes_identificados'] = (($totais['clientes_identificados'] * 100) / $totais['qtd_vendas']);
            $totais['ticket_medio'] = $totais['vl_total_vendas'] / $totais['qtd_vendas'];
            $totais['pecas_atendimento'] = $totais['pecas_vendidas'] / $totais['qtd_vendas'];
        }
        return view('home', compact('empresas', 'totais'));
    }

    public function fitro($slug)
    {
        return $this->index(['slug' => $slug]);
    }

    public function fitroData($data)
    {
        return $this->index(['data' => $data]);
    }

    public function fitroSlugData($slug, $data)
    {
        return $this->index([
            'slug' => $slug,
            'data' => $data
        ]);
    }

    public function getDataValue($data)
    {
        return $this->datasValues[$data];
    }

}
