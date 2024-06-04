<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Items;
use Carbon\Carbon;

class PendapatanPerBulanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tahun = date('Y');
        $Bulan = date('m');
        for ($i = 1; $i <= $Bulan; $i++) {
            $totalpendapatan = Items::
                // sum('harga_sprei');
                whereYear('created_at', $tahun)
                ->whereMonth('created_at', $i)
                ->sum('harga_sprei');

                $dataBulan[] = Carbon::create()->month($i)->format('F');
                $dataTotalpendapatan[] = $totalpendapatan;
        }
        // dd($dataTotalpendapatan);


        return $this->chart->lineChart()
            ->setColors(['#386BBF'])
            ->addData('Total Pendapatan', $dataTotalpendapatan)
            ->setHeight(250)
            ->setXAxis($dataBulan);
    }
}
