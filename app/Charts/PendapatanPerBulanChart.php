<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
// rel#123@aku!738
use App\Models\Items;

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

            $dataBulan[] = $i;
            $dataTotalpendapatan[] = $totalpendapatan;
        }
        // dd($dataTotalpendapatan);


        return $this->chart->lineChart()
            ->setColors(['#386BBF'])
            ->addData('total pendapatan', $dataTotalpendapatan)
            ->setHeight(250)
            ->setXAxis($dataBulan);
    }
}
