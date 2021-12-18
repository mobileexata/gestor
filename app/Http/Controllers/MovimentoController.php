<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MovimentoController extends Controller
{
    private $labelsChart = null;
    private $dataChart = null;
    private $colors = null;

    private function getChart($tipo = 1, $data = null)
    {
        $getData = new HomeController();
        $data = (is_null($data)) ? $getData->getDataValue('hoje') : $getData->getDataValue($data);

        foreach (Auth::user()->empresas()->get() as $e)
        {
            $qtd_vendas = DB::table('movimentos')
                ->whereBetween('data', $data)
                ->where('empresa_id', $e->id)
                ->sum('qtd_vendas');

            $vl_total_vendas = DB::table('movimentos')
                ->whereBetween('data', $data)
                ->where('empresa_id', $e->id)
                ->sum('vl_total_vendas');

            $this->labelsChart[] = $e->fantasia;
            if ($tipo == 1)
                $this->dataChart[] = $vl_total_vendas;
            else {
                $this->dataChart[] = $qtd_vendas;
                $this->colors[] = $this->random_color();
            }
        }
    }

    public function dadosGraficoBarras($data = null)
    {
        $this->getChart(1, $data);
        return [
            'labels' => $this->labelsChart,
            'datasets' => [
                [
                    'label' => 'Total',
                    'backgroundColor' => '#4e73df',
                    'hoverBackgroundColor' => '#2e59d9',
                    'borderColor' => '#4e73df',
                    'data' => $this->dataChart
                ]
            ],
        ];
    }

    public function dadosGraficoPizza($data = null)
    {
        $this->getChart(2, $data);
        return [
            'labels' => $this->labelsChart,
            'datasets' => [
                [
                    'data' =>  $this->dataChart,
                    'backgroundColor' => $this->colors,
                    'hoverBorderColor' => "rgba(234, 236, 244, 1)"
                ]
            ]
        ];
    }
}
